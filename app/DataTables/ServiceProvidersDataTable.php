<?php

namespace App\DataTables;

use App\Models\Company;
use App\Models\ServiceProviders;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class ServiceProvidersDataTable extends DataTable
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
            ->addColumn('id', function ($query){
                return $query->serviceproviderid;
            })
            ->addColumn('provider', function ($query){
//                dd($query);
                return Company::where('companyid',$query->companyid)->first()->companyname;
            })
            ->addColumn('service_name', function ($query){
//                dd($query);
                return $query->moneyservicename;
            })
            ->addColumn('action', 'service_providers.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\ServiceProviders $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(ServiceProviders $model)
    {
        return $model->with('company')->newQuery();
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
            'id',
//            'companyid',
            'provider',
            'service_name',
//            'provideridentifier',
            'accountnumber',
//            'serviceprovidercategoryid',
//            'cutofflimit',
//            'settlementaccount',
//            'b2cbalance',
//            'c2bbalance',
//            'processingmode',
//            'addedby',
            'serviceprovidertype',
            'status'
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'service_providersdatatable_' . time();
    }
}
