<?php

namespace App\DataTables\Services;

use Yajra\DataTables\Services\DataTable;

class BaseDataTable extends DataTable
{
    public function initiateDataTable($query)
    {
        return datatables()
            ->eloquent($this->defautOrderQuery($query))
            ->addIndexColumn()
            ->addColumn('action', function ($item) {
                return $this->createDefaultActionColumn($item);
            })
            ->editColumn('created_at', function ($item) {
                return $item?->created_at?->diffForHumans();
            })
            ->editColumn('updated_at', function ($item) {
                return $item?->updated_at?->diffForHumans();
            })
            ->rawColumns(array_merge(['action'], $this->rawColumns()));
    }

    public function rawColumns()
    {
        return [];
    }

    protected function createDefaultActionColumn($item)
    {
        return view('components.datatables.action', [
            'edit_href' => $this->getEditRoute($item),
            'delete_href' => $this->getDeleteRoute($item),
        ]);
    }

    protected function getEditRoute($item)
    {
        return '';
    }

    protected function getDeleteRoute($item)
    {
        return '';
    }

    protected function getId($item)
    {
        return $item->id;
    }

    public function defautOrderQuery($query)
    {
        if (! request()->get('order')) {
            $query->orderBy('updated_at', 'desc');
        }

        return $query;
    }
}
