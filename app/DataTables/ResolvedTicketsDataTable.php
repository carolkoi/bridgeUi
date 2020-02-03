<?php

namespace App\DataTables;

use App\Models\Ticket;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class ResolvedTicketsDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        $dataTable = new EloquentDataTable($query);

        return $dataTable
            ->addColumn('staff', 'tickets.datatables_staff')
            ->addColumn('department', 'tickets.datatables_department')
            ->addColumn('location', 'tickets.datatables_location')
            ->addColumn('issue_type', 'tickets.datatables_issue')
//            ->addColumn('resolved_by', 'tickets.datatables_resolve')
            ->addColumn('action', 'tickets.datatables_actions')
            ->setRowAttr([
                'style' => function($query){
                    return $query->business_continuity_impacted ? 'background-color: #ff0000;' :
                        ($query->surrender_status ? 'background-color: gold;' : null);
                }
            ]);
//        ->setRowAttr([
//        'style' => function($query){
//            return $query->surrender_status ? 'background-color: gold;' : null;
//        }
//    ]);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\ResolvedTickets $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Ticket $model)
    {
        return $model->with('user', 'department', 'issue_type')->where(['resolved_status' => true, 'closed_status' => false])->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->addAction(['width' => '120px', 'printable' => false])
            ->parameters([
                'dom'       => 'Bfrtip',
                'stateSave' => true,
                'order'     => [[0, 'desc']],
                'buttons'   => [
                    ['extend' => 'create', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'export', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'print', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'reset', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'reload', 'className' => 'btn btn-default btn-sm no-corner',],
                ],
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            'staff',
            'department',
            'location',
            'issue_type',
//            'resolved_by'
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'resolved_ticketsdatatable_' . time();
    }
}