@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Maintenance Record
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <maintenance-component></maintenance-component>

        {{--        <div class="box box-primary">--}}
{{--            <div class="box-body">--}}
{{--                <div class="row">--}}
{{--                    {!! Form::open(['route' => 'maintenanceRecords.store']) !!}--}}

{{--                        @include('maintenance_records.fields')--}}

{{--                    {!! Form::close() !!}--}}
{{--                </div>--}}

{{--            </div>--}}
{{--        </div>--}}
    </div>

@endsection
{{--<script>--}}
{{--    import MaintenanceComponent from "../../js/components/staffs/MaintenanceComponent";--}}
{{--    export default {--}}
{{--        components: {MaintenanceComponent}--}}
{{--    }--}}
{{--</script>--}}
