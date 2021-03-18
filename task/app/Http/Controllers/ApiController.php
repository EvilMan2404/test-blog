<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use App\Models\Post;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Validator;

class ApiController extends Controller
{
    /**
     * @param  Request  $request
     * @return JsonResponse
     */
    public function views(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'slug' => [
                'required', static function ($attribute, $value, $fail) {
                    $item = Post::where('slug', $value)->first();
                    if (!$item) {
                        $fail('Статья не найдена!');
                    }
                }
            ],
        ]);
        if ($validator->passes() && $request->ajax()) {
            $item = Post::where('slug', $request->get('slug'))->first();
            ViewsController::addView($item->id, $request->ip());
            $result = [
                'status' => 'ok',
                'views'  => $item->views->count()
            ];
            return response()->json($result);
        }
        return response()->json([
            'status' => 'error', 'error' => isset($validator) ? $validator->errors()->all() : 'not access'
        ], 400);
    }

    /**
     * @param  Request  $request
     * @return JsonResponse
     */
    public function like(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'slug' => [
                'required', static function ($attribute, $value, $fail) {
                    $item = Post::where('slug', $value)->first();
                    if (!$item) {
                        $fail('Статья не найдена!');
                    }
                }
            ],
        ]);
        if ($validator->passes() && $request->ajax()) {
            $item = Post::where('slug', $request->get('slug'))->first();
            LikesController::like($item->id, $request->ip());
            $result = [
                'status' => 'ok',
                'likes'  => $item->likes->count()
            ];
            return response()->json($result);
        }
        return response()->json([
            'status' => 'error', 'error' => isset($validator) ? $validator->errors()->all() : 'not access'
        ], 400);
    }

    /**
     * @param  Request  $request
     * @return JsonResponse
     * @throws \Throwable
     */
    public function comment(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'slug'  => [
                'required', static function ($attribute, $value, $fail) {
                    $item = Post::where('slug', $value)->first();
                    if (!$item) {
                        $fail('Статья не найдена!');
                    }
                }
            ],
            'theme' => 'required|max:255',
            'text'  => 'required',
        ]);
        if ($validator->passes() && $request->ajax()) {
            $item = Post::where('slug', $request->get('slug'))->first();
            \DB::transaction(static function ($query) use ($request, $item) {
                $newComment          = new Comments();
                $newComment->ip      = $request->ip();
                $newComment->text    = $request->post('text');
                $newComment->subject = $request->post('theme');
                $newComment->id_post = $item->id;
                $newComment->save();
            });
            $result = [
                'status' => 'ok',
                'msg'    => 'Комментарий добавлен'
            ];
            return response()->json($result);
        }
        $msg   = '';
        $error = 0;
        if (isset($validator)) {
            foreach ($validator->errors()->all() as $item) {
                $error++;
            }
        }
        if ($error > 0) {
            $msg = 'Заполните все поля корректными данными!';
        } else {
            $msg = 'Not access';
        }
        return response()->json([
            'status' => 'error', 'msg' => $msg
        ], 400);
    }
}
