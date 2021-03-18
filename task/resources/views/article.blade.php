@extends('layouts.layout')
@section('content')
    <div class="row mb-3">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    {{$item->name}}
                </div>
                <div class="card-body">
                    <img src="https://via.placeholder.com/1280x500" alt="" class="img-fluid">
                    <p>
                        {{$item->description}}
                    </p>
                </div>
                <div class="card-footer">
                    <div class="row align-items-center justify-content-between">
                        <div>
                            <i class="fa fa-eye" aria-hidden="true"></i>
                            <span id="views" data-url="{{route('api.views',['slug' => $item->slug])}}">
                                {{$item->views->count()}}
                            </span>
                        </div>
                        <div>
                            <button id="like" data-url="{{route('api.like',['slug' => $item->slug])}}" class="btn"><i
                                        class="fa fa-heart" aria-hidden="true"></i></button>
                            <span id="likes">
                            {{$item->likes->count()}}
                        </span>
                        </div>
                    </div>
                </div>
            </div>

            <div id="tags" class="card mt-5">
                <div class="card-header">
                    Теги
                </div>
                <div class="card-body">
                    {!! $item->showTags() !!}
                </div>
            </div>

            <div class="card mt-5">
                <form id="commentForm" data-url="{{route('api.comment',['slug' => $item->slug])}}"
                      onsubmit="return false;">
                    <div class="card-header">
                        Комментарий
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="theme">Тема</label>
                            <input type="text" id="theme" class="form-control" name="theme" required
                                   placeholder="Введите тему">
                        </div>
                        <div class="form-group">
                            <label for="text">Текст отзыва</label>
                            <textarea id="text" name="text" required class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button id="comment" class="btn btn-primary" type="submit">Отправить</button>
                    </div>
                </form>
            </div>
        </div>

    </div>

@endsection
@section('script-bottom')
    <script src="{{asset('js/api.js')}}"></script>
@endsection