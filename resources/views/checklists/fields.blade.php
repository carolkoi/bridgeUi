<!-- Action Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('action', 'Action:') !!}
    {!! Form::text('action', null, ['class' => 'form-control']) !!}
</div>

<!-- Maintenance Schedule Id Field -->
    {!! Form::hidden('maintenance_schedule_id', $schedule_id, ['class' => 'form-control']) !!}
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('checklists.index') }}" class="btn btn-default">Cancel</a>
</div>
