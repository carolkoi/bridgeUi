<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{{ $closedTicket->user_id }}</p>
</div>

<!-- Department Id Field -->
<div class="form-group">
    {!! Form::label('department_id', 'Department Id:') !!}
    <p>{{ $closedTicket->department_id }}</p>
</div>

<!-- Issue Type Id Field -->
<div class="form-group">
    {!! Form::label('issue_type_id', 'Issue Type Id:') !!}
    <p>{{ $closedTicket->issue_type_id }}</p>
</div>

<!-- Business Continuity Impacted Field -->
<div class="form-group">
    {!! Form::label('business_continuity_impacted', 'Business Continuity Impacted:') !!}
    <p>{{ $closedTicket->business_continuity_impacted }}</p>
</div>

<!-- Image Field -->
<div class="form-group">
    {!! Form::label('image', 'Image:') !!}
    <p>{{ $closedTicket->image }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $closedTicket->description }}</p>
</div>

<!-- Assign To Field -->
<div class="form-group">
    {!! Form::label('assign_to', 'Assign To:') !!}
    <p>{{ $closedTicket->assign_to }}</p>
</div>

<!-- Surrender Status Field -->
<div class="form-group">
    {!! Form::label('surrender_status', 'Surrender Status:') !!}
    <p>{{ $closedTicket->surrender_status }}</p>
</div>

<!-- Resolved Status Field -->
<div class="form-group">
    {!! Form::label('resolved_status', 'Resolved Status:') !!}
    <p>{{ $closedTicket->resolved_status }}</p>
</div>

<!-- Closed Status Field -->
<div class="form-group">
    {!! Form::label('closed_status', 'Closed Status:') !!}
    <p>{{ $closedTicket->closed_status }}</p>
</div>

