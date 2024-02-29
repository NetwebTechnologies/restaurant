<?php

namespace Netweb\Restaurant\DataTables;

use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;
use Netweb\Restaurant\Models\RestaurantName;

class RestaurantNameDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->editColumn('created_at', function($query) {
                return $query->created_at->toDayDateTimeString();
            })
            ->editColumn('updated_at', function($query) {
                return $query->updated_at->toDayDateTimeString();
            })
            ->editColumn('status', function ($query) {
                if ($query->status == 1) {
                    return 'Active';
                } else {
                    return 'InActive';
                }
            })
            ->addColumn('action', 'restaurant::restaurant-name.action');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\RestaurantName $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(RestaurantName $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('restaurantname-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Bfrtip')
                    ->orderBy(1)
                    ->buttons(
                        Button::make('create'),
                        Button::make('export'),
                        Button::make('print'),
                        Button::make('reset'),
                        Button::make('reload')
                    );
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::computed('action')
                  ->exportable(false)
                  ->printable(false)
                  ->width(60)
                  ->addClass('text-center'),
            Column::make('id'),
            Column::make('restaurant_name'),
            Column::make('address'),
            Column::make('phone_number'),
            Column::make('status'),
            Column::make('created_at'),
            Column::make('updated_at'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'RestaurantName_' . date('YmdHis');
    }
}
