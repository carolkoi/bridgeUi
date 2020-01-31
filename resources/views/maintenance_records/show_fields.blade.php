<!-- Asset Id Field -->
<div class="form-group">
    {!! Form::label('asset_id', 'Asset Id:') !!}
    <p>{{ $maintenanceRecord->asset_id }}</p>
</div>

<!-- Asset Details Field -->
<div class="form-group">
    {!! Form::label('asset_details', 'Asset Details:') !!}
    <p>{{ $maintenanceRecord->asset_details }}</p>
</div>

<!-- Component Details Field -->
<div class="form-group">
    {!! Form::label('component_details', 'Component Details:') !!}
    <p>{{ $maintenanceRecord->component_details }}</p>
</div>

<!-- Department Id Field -->
<div class="form-group">
    {!! Form::label('department_id', 'Department Id:') !!}
    <p>{{ $maintenanceRecord->department_id }}</p>
</div>

<!-- Commission Date Field -->
<div class="form-group">
    {!! Form::label('commission_date', 'Commission Date:') !!}
    <p>{{ $maintenanceRecord->commission_date }}</p>
</div>

<!-- Decommission Duration Field -->
<div class="form-group">
    {!! Form::label('decommission_duration', 'Decommission Duration:') !!}
    <p>{{ $maintenanceRecord->decommission_duration }}</p>
</div>

<!-- Decommission Reminder Field -->
<div class="form-group">
    {!! Form::label('decommission_reminder', 'Decommission Reminder:') !!}
    <p>{{ $maintenanceRecord->decommission_reminder }}</p>
</div>

