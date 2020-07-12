<?php
/**
 * Created by PhpStorm.
 * User: Cuthbert Mirambo
 * Date: 2/15/2018
 * Time: 3:33 PM
 */

namespace Xploro\App\Filters\Deletion;


use Xploro\App\Filters\FilterAbstract;
use Illuminate\Database\Eloquent\Builder;

class DeletionFilter extends FilterAbstract
{

    /**
     * Apply filter.
     *
     * @param Builder $builder
     * @param $value
     *
     * @return mixed
     */
    public function filter(Builder $builder, $value)
    {
        if($value === null) {
            return $builder;
        }

        return $builder->onlyTrashed();
    }
}