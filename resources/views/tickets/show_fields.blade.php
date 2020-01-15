<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{!! $ticket->user_id !!}</p>
</div>

<!-- Department Id Field -->
<div class="form-group">
    {!! Form::label('department_id', 'Department Id:') !!}
    <p>{!! $ticket->department_id !!}</p>
</div>

<!-- Issue Type Id Field -->
<div class="form-group">
    {!! Form::label('issue_type_id', 'Issue Type Id:') !!}
    <p>{!! $ticket->issue_type_id !!}</p>
</div>

<!-- Business Continuity Impacted Field -->
<div class="form-group">
    {!! Form::label('business_continuity_impacted', 'Business Continuity Impacted:') !!}
    <p>{!! $ticket->business_continuity_impacted !!}</p>
</div>

<!-- Image Field -->
<div class="form-group">
    {!! Form::label('image', 'Image:') !!}
    <p>{!! $ticket->image !!}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{!! $ticket->description !!}</p>
</div>

