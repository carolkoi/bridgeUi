<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $resolvedTickets->user_id }}</p>
</div>

<!-- Department Id Field -->
<div class="form-group">
    {!! Form::label('department_id', 'Department Id:') !!}
    <p>{{ $resolvedTickets->department_id }}</p>
</div>

<!-- Issue Type Id Field -->
<div class="form-group">
    {!! Form::label('issue_type_id', 'Issue Type Id:') !!}
    <p>{{ $resolvedTickets->issue_type_id }}</p>
</div>

<!-- Business Continuity Impacted Field -->
<div class="form-group">
    {!! Form::label('business_continuity_impacted', 'Business Continuity Impacted:') !!}
    <p>{{ $resolvedTickets->business_continuity_impacted }}</p>
</div>

<!-- Image Field -->
<div class="form-group">
    {!! Form::label('image', 'Image:') !!}
    <p>{{ $resolvedTickets->image }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $resolvedTickets->description }}</p>
</div>

<!-- Assign To Field -->
<div class="form-group">
    {!! Form::label('assign_to', 'Assign To:') !!}
    <p>{{ $resolvedTickets->assign_to }}</p>
</div>

<!-- Surrender Status Field -->
<div class="form-group">
    {!! Form::label('surrender_status', 'Surrender Status:') !!}
    <p>{{ $resolvedTickets->surrender_status }}</p>
</div>

<!-- Resolved Status Field -->
<div class="form-group">
    {!! Form::label('resolved_status', 'Resolved Status:') !!}
    <p>{{ $resolvedTickets->resolved_status }}</p>
</div>

