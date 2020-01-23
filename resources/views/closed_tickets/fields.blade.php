<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Department Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('department_id', 'Department Id:') !!}
    {!! Form::number('department_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Issue Type Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('issue_type_id', 'Issue Type Id:') !!}
    {!! Form::number('issue_type_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Business Continuity Impacted Field -->
<div class="form-group col-sm-6">
    {!! Form::label('business_continuity_impacted', 'Business Continuity Impacted:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('business_continuity_impacted', 0) !!}
        {!! Form::checkbox('business_continuity_impacted', '1', null) !!}
    </label>
</div>


<!-- Image Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('image', 'Image:') !!}
    {!! Form::textarea('image', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Assign To Field -->
<div class="form-group col-sm-6">
    {!! Form::label('assign_to', 'Assign To:') !!}
    {!! Form::number('assign_to', null, ['class' => 'form-control']) !!}
</div>

<!-- Surrender Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('surrender_status', 'Surrender Status:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('surrender_status', 0) !!}
        {!! Form::checkbox('surrender_status', '1', null) !!}
    </label>
</div>


<!-- Resolved Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('resolved_status', 'Resolved Status:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('resolved_status', 0) !!}
        {!! Form::checkbox('resolved_status', '1', null) !!}
    </label>
</div>


<!-- Closed Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('closed_status', 'Closed Status:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('closed_status', 0) !!}
        {!! Form::checkbox('closed_status', '1', null) !!}
    </label>
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('closedTickets.index') }}" class="btn btn-default">Cancel</a>
</div>
