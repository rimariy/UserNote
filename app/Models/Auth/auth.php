<?php

namespace App\Models\Auth;

use Shamaseen\Repository\Utility\Model as Model;

/**
 * Class auth.
 *
 * @method static Builder|Model appendFilterables(array $filterables)
 * @method static Builder|Model appendSearchables(array $searchables)
 * @method static Builder|Model appendSortables(array $sortables)
 * @method static Builder|Model clearCache()
 * @method static Builder|Model disableCache()
 * @method static Builder|Model enableCache()
 * @method static Builder|Model filterByCriteria(array $criteria)
 * @method static \Illuminate\Database\Eloquent\Builder|auth newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|auth newQuery()
 * @method static Builder|Model orderByCriteria(array $criteria)
 * @method static \Illuminate\Database\Eloquent\Builder|auth query()
 * @method static Builder|Model searchByCriteria(array $criteria)
 * @method static Builder|Model setFilterables(array $filterables)
 * @method static Builder|Model setSearchables(array $searchables)
 * @method static Builder|Model setSortables(array $sortables)
 * @mixin \Eloquent
 */
class auth extends Model
{
    /*
    * Fill in your fillables here
    */
    protected $fillable = [];
}
