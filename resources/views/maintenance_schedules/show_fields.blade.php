<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $maintenanceSchedule->name }}</p>
</div>

<!-- Department Id Field -->
<div class="form-group">
    {!! Form::label('department_id', 'Department Id:') !!}
    <p>{{ $maintenanceSchedule->department_id }}</p>
</div>

<!-- Asset Id Field -->
<div class="form-group">
    {!! Form::label('asset_id', 'Asset Id:') !!}
    <p>{{ $maintenanceSchedule->asset_id }}</p>
</div>

<!-- Cycle Id Field -->
<div class="form-group">
    {!! Form::label('cycle_id', 'Cycle Id:') !!}
    <p>{{ $maintenanceSchedule->cycle_id }}</p>
</div>

<!-- Start Date Field -->
<div class="form-group">
    {!! Form::label('start_date', 'Start Date:') !!}
    <p>{{ $maintenanceSchedule->start_date }}</p>
</div>

