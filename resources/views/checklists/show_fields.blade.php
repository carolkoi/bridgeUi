<!-- Action Field -->
<div class="form-group">
    {!! Form::label('action', 'Action:') !!}
    <p>{{ $checklist->action }}</p>
</div>

<!-- Comment Field -->
<div class="form-group">
    {!! Form::label('comment', 'Comment:') !!}
    <p>{{ $checklist->comment }}</p>
</div>

<!-- Maintenance Schedule Id Field -->
<div class="form-group">
    {!! Form::label('maintenance_schedule_id', 'Maintenance Schedule Id:') !!}
    <p>{{ $checklist->maintenance_schedule_id }}</p>
</div>

