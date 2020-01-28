<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Department Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('department_id', 'Department Id:') !!}
    {!! Form::select('department_id', $departments, null, ['class' => 'form-control select2']) !!}
</div>

<!-- Asset Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('asset_id', 'Asset Id:') !!}
    {!! Form::select('asset_id', $assets, null, ['class' => 'form-control select2']) !!}
</div>

<!-- Cycle Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cycle_id', 'Cycle Id:') !!}
    {!! Form::select('cycle_id', $cycles, null, ['class' => 'form-control select2']) !!}
</div>

<!-- Start Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('start_date', 'Start Date:') !!}
    {!! Form::date('start_date', null, ['class' => 'form-control','id'=>'start_date']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#start_date').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endsection

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('maintenanceSchedules.index') }}" class="btn btn-default">Cancel</a>
</div>
