<?php

namespace App\DataTables;

use App\Models\GlobalSettings;
use App\Models\ServiceProviders;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;

class GlobalSettingsDataTable extends DataTable
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
            ->addColumn('setting_id', function ($query){
                return $query->switchsettingid;
            })
            ->addColumn('service_provider', function ($query){
                return ServiceProviders::where('serviceproviderid', $query->serviceproviderid)->first()->moneyservicename;
//                foreach ($query->serviceProviders as $serviceProvider){
////                    dd($serviceProvider->moneyservicename);
//                    return $serviceProvider->moneyservicename;
//                }

            })
//            ->addColumn('service_provider', 'global_settings.datatables_sp')
            ->addColumn('action', 'global_settings.datatables_actions');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\GlobalSettings $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(GlobalSettings $model)
    {
        return $model->with(['serviceProviders'])->newQuery();
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
            'setting_id',
            'service_provider',
//            'serviceproviderid',
            'setting',
            'settingvalue',
//            'valuetype',
//            'addedby',
//            'ipaddress'
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'global_settingsdatatable_' . time();
    }
}
