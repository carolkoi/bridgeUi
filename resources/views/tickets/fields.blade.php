{{--<!-- User Id Field -->--}}
{{--<div class="form-group col-sm-6">--}}
{{--    {!! Form::label('user_id', 'User Id:') !!}--}}
{{--    {!! Form::select('user_id', $users, ['class' => 'select2']) !!}--}}
{{--</div>--}}

{{--<!-- Department Id Field -->--}}
{{--<div class="form-group col-sm-6">--}}
{{--    {!! Form::label('department_id', 'Department Id:') !!}--}}
{{--    {!! Form::number('department_id', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}

<!-- Issue Type Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('issue_type_id', 'Issue Type:') !!}
    {!! Form::select('issue_type_id', $issues, null, ['class' => 'form-control select2', 'id' => 'issue_type_id']) !!}
</div>
<br/>

<!-- Business Continuity Impacted Field -->
<div class="form-group col-sm-6">
    {!! Form::label('business_continuity_impacted', 'Business Continuity Impacted:') !!}
{{--    <label class="checkbox-inline">--}}
{{--        {!! Form::hidden('business_continuity_impacted', 0) !!}--}}
        {!! Form::checkbox('business_continuity_impacted', '1', null) !!}
{{--    </label>--}}
</div>
<br/><br/><br/>
<!-- Description Field -->
<div class="form-group col-sm-6 col-lg-6">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['id' => 'description']) !!}
</div>
@if(isset($ticket))
    <div class="form-group col-sm-6">
        {!! Form::label('image', 'Image Uploads or Error Log:') !!}
        <br/>
        <img src="{{$ticket->getFirstMediaUrl('document', 'thumb')}}" />


        {{--    <div class="needsclick dropzone" id="document-dropzone"></div>--}}
    </div>
    @else
<!-- Image Field -->
<div class="form-group col-sm-6">
    {!! Form::label('image', 'Upload Image or Error Log:') !!}
    <div class="needsclick dropzone" id="document-dropzone"></div>
</div>
@endif

<!--assign field -->
@if(isset($ticket))

    @if($surrender_status == 1)
    <div class="form-group col-sm-6">
        {!! Form::label('assign_to', 'Ticket previously assigned to:') !!}
        {!! Form::select('assign_to', $ict_staffs, null, ['class' => 'form-control select2', 'disabled' => 'disabled']) !!}
    </div>
    <div class="form-group col-sm-6">
        {!! Form::label('assign_to', 'Reassigned to:') !!}
        {!! Form::select('assign_to', $ict_staffs, null, ['class' => 'form-control select2', 'id' => 'assign_to_id' ]) !!}
    </div>
    @else

    <div class="form-group col-sm-6">
        {!! Form::label('assign_to', 'Assigned to:') !!}
        {!! Form::select('assign_to', $ict_staffs, null, ['class' => 'form-control select2', 'id' => 'assign_to_id' ]) !!}
    </div>
        @endif

    @endif

<!-- Submit Field -->
@if(isset($ticket))
    <div class="form-group col-sm-12">
        {!! Form::submit('Assign', ['class' => 'btn btn-primary']) !!}
        <a href="{!! route('tickets.index') !!}" class="btn btn-default">Cancel</a>
    </div>
    @else
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('tickets.index') !!}" class="btn btn-default">Cancel</a>
</div>
@endif

{{--@section('js')--}}

{{--    <script>--}}
{{--        CKEDITOR.replace('description')--}}
{{--        $('#valid_from, #valid_until').datetimepicker({--}}
{{--            format: 'YYYY-MM-DD',--}}
{{--            useCurrent: false--}}
{{--        })--}}
{{--    </script>--}}
{{--@endsection--}}
