@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Maintenance Schedule
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($maintenanceSchedule, ['route' => ['maintenanceSchedules.update', $maintenanceSchedule->id], 'method' => 'patch']) !!}

                        @include('maintenance_schedules.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection