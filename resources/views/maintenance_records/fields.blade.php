<!-- Asset Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('asset_id', 'Asset Id:') !!}
    {!! Form::number('asset_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Asset Details Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('asset_details', 'Asset Details:') !!}
    {!! Form::textarea('asset_details', null, ['class' => 'form-control']) !!}
</div>

<!-- Component Details Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('component_details', 'Component Details:') !!}
    {!! Form::textarea('component_details', null, ['class' => 'form-control']) !!}
</div>

<!-- Department Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('department_id', 'Department Id:') !!}
    {!! Form::number('department_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Commission Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('commission_date', 'Commission Date:') !!}
    {!! Form::date('commission_date', null, ['class' => 'form-control','id'=>'commission_date']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#commission_date').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endsection

<!-- Decommission Duration Field -->
<div class="form-group col-sm-6">
    {!! Form::label('decommission_duration', 'Decommission Duration:') !!}
    {!! Form::date('decommission_duration', null, ['class' => 'form-control','id'=>'decommission_duration']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#decommission_duration').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endsection

<!-- Decommission Reminder Field -->
<div class="form-group col-sm-6">
    {!! Form::label('decommission_reminder', 'Decommission Reminder:') !!}
    {!! Form::date('decommission_reminder', null, ['class' => 'form-control','id'=>'decommission_reminder']) !!}
</div>

@section('scripts')
    <script type="text/javascript">
        $('#decommission_reminder').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endsection

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('maintenanceRecords.index') }}" class="btn btn-default">Cancel</a>
</div>
