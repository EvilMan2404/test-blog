<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Views
 *
 * @property int $id
 * @property int|null $id_post
 * @property string|null $ip
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Views newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Views newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Views query()
 * @method static \Illuminate\Database\Eloquent\Builder|Views whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Views whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Views whereIdPost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Views whereIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Views whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Views extends Model
{
}
