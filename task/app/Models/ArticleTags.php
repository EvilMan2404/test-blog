<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\ArticleTags
 *
 * @property int $id
 * @property int|null $id_tag
 * @property int|null $id_post
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ArticleTags newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ArticleTags newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ArticleTags query()
 * @method static \Illuminate\Database\Eloquent\Builder|ArticleTags whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ArticleTags whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ArticleTags whereIdPost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ArticleTags whereIdTag($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ArticleTags whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ArticleTags extends Model
{

}
