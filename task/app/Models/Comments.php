<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Comments
 *
 * @property int $id
 * @property string|null $ip
 * @property string|null $subject
 * @property string|null $text
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Comments newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Comments newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Comments query()
 * @method static \Illuminate\Database\Eloquent\Builder|Comments whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comments whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comments whereIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comments whereSubject($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comments whereText($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Comments whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property int|null $id_post
 * @method static \Illuminate\Database\Eloquent\Builder|Comments whereIdPost($value)
 */
class Comments extends Model
{
   
}
