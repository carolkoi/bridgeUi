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
    {!! Form::select('issue_type_id', $issues, null, ['class' => 'form-control select2']) !!}
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
@if(isset($ticket))
    <div class="form-group col-sm-6">
        {!! Form::label('image', 'Image Uploads or Error Log:') !!}
        <br/>
        <img src="{{$ticket->getFirstMediaUrl('document', 'thumb')}}" />


        {{--    <div class="needsclick dropzone" id="document-dropzone"></div>--}}
    </div>
    @else
<!-- Image Field -->
<div class="form-group col-sm-12">
    {!! Form::label('image', 'Upload Image or Error Log:') !!}
    <div class="needsclick dropzone" id="document-dropzone"></div>
</div>
@endif
    <br/><br/>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['id' => 'description']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('tickets.index') !!}" class="btn btn-default">Cancel</a>
</div>

{{--@section('js')--}}

{{--    <script>--}}
{{--        CKEDITOR.replace('description')--}}
{{--        $('#valid_from, #valid_until').datetimepicker({--}}
{{--            format: 'YYYY-MM-DD',--}}
{{--            useCurrent: false--}}
{{--        })--}}
{{--    </script>--}}
{{--@endsection--}}
