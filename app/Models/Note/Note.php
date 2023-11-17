<?php

namespace App\Models\Note;

use Shamaseen\Repository\Utility\Model as Model;

/**
 * Class note.
 *
 * @property int $id
 * @property int $user_id
 * @property string $title
 * @property string|null $content
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static Builder|Model appendFilterables(array $filterables)
 * @method static Builder|Model appendSearchables(array $searchables)
 * @method static Builder|Model appendSortables(array $sortables)
 * @method static Builder|Model clearCache()
 * @method static Builder|Model disableCache()
 * @method static Builder|Model enableCache()
 * @method static Builder|Model filterByCriteria(array $criteria)
 * @method static \Illuminate\Database\Eloquent\Builder|note newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|note newQuery()
 * @method static Builder|Model orderByCriteria(array $criteria)
 * @method static \Illuminate\Database\Eloquent\Builder|note query()
 * @method static Builder|Model searchByCriteria(array $criteria)
 * @method static Builder|Model setFilterables(array $filterables)
 * @method static Builder|Model setSearchables(array $searchables)
 * @method static Builder|Model setSortables(array $sortables)
 * @method static \Illuminate\Database\Eloquent\Builder|note whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|note whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|note whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|note whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|note whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|note whereUserId($value)
 * @mixin \Eloquent
 */
class note extends Model
{
    /*
    * Fill in your fillables here
    */
    protected $fillable = ['user_id','title','content'];
}
