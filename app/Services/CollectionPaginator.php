<?php

namespace App\Services;

use Illuminate\Support\Collection;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

class CollectionPaginator
{
    public static function paginate($items, $perPage = 15, $page = null, $options = []): LengthAwarePaginator
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage)->values(), $items->count(), $perPage, $page,
            [
                'path'      => LengthAwarePaginator::resolveCurrentPath(),
                'pageName'  => 'page',
            ]);
    }
}
