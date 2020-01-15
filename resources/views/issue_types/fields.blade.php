<!-- Issue Field -->
<div class="form-group col-sm-6">
    {!! Form::label('issue', 'Issue:') !!}
    {!! Form::text('issue', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('issueTypes.index') !!}" class="btn btn-default">Cancel</a>
</div>
