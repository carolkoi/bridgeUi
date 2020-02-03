@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Maintenance Record
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($maintenanceRecord, ['route' => ['maintenanceRecords.update', $maintenanceRecord->id], 'method' => 'patch']) !!}

                        @include('maintenance_records.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection