<?php
/**
 * Created by PhpStorm.
 * User: Cuthbert Mirambo
 * Date: 2/18/2018
 * Time: 7:06 PM
 */

namespace Xploro\App\Traits\Eloquent\Ordering;


trait PivotOrderableTrait
{
    /**
     * Order model results by pivot
     *
     * @param $query
     * @param string $column
     * @param string $order
     * @return mixed
     */
    public function scopeOrderByPivot($query, $column = 'created_at', $order = 'desc')
    {
        return $query->orderBy('pivot_' . $column, $order);
    }
}