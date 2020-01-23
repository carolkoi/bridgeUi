<!--  Id Field -->
    {!! Form::hidden('id', $ticket->id, ['id' => 'ticket_id']) !!}
<!-- Surrender Status Field -->
{!! Form::hidden('surrender_status', null, ['id' => 'surrender_status']) !!}

<!-- User Id Field -->
<div class="form-group col-sm-4">
    {!! Form::label('user_id', 'Staff:') !!}
    {!! Form::text('user_id', $user->name, ['class' => 'form-control', 'readonly' => 'readonly']) !!}
</div>

<!-- Department Id Field -->
<div class="form-group col-sm-4">
    {!! Form::label('department_id', 'Department:') !!}
    {!! Form::text('department_id', $department, ['class' => 'form-control', 'readonly' => 'readonly']) !!}
</div>

<!-- Department Id Field -->
<div class="form-group col-sm-4">
    {!! Form::label('location', 'Location:') !!}
    {!! Form::text('location', $user->location, ['class' => 'form-control', 'readonly' => 'readonly']) !!}
</div>

<!-- Issue Type Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('issue_type_id', 'Issue Type:') !!}
    {!! Form::select('issue_type_id', $issue, null, ['class' => 'form-control select2', 'id' => 'issue_type_id']) !!}
</div>


<!-- Business Continuity Impacted Field -->
<div class="form-group col-sm-6">
    {!! Form::label('business_continuity_impacted', 'Business Continuity Impacted:') !!}
    {{--    <label class="checkbox-inline">--}}
    {{--        {!! Form::hidden('business_continuity_impacted', 0) !!}--}}
    {!! Form::checkbox('business_continuity_impacted', '1', null) !!}
    {{--    </label>--}}
</div>
<br/><br/><br/><br/><br/><br/><br/><br/>

<!-- Image Field -->
<div class="form-group col-sm-6 ">
    {!! Form::label('image', 'Image Uploads or Error Log:') !!}
    <br/>
    <img src="{{$ticket->getFirstMediaUrl('document', 'thumb')}}" />


    {{--    <div class="needsclick dropzone" id="document-dropzone"></div>--}}
</div>
<!-- Description Field -->
<div class="form-group col-sm-6 col-lg-6">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['id' => 'description']) !!}
</div>
{{--<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>--}}

<!-- Ticket resolving div-->
<div class="col-md-12 resolveTicket">
<!-- Issue Field -->
<div class="form-group col-sm-6 col-lg-6">
    {!! Form::label('issue', 'Issue:') !!}
    {!! Form::textarea('issue', null, ['id' => 'issue']) !!}
</div>

<!-- Solution Field -->
<div class="form-group col-sm-6 col-lg-6">
    {!! Form::label('solution', 'Solution:') !!}
    {!! Form::textarea('solution', null, ['id' => 'solution']) !!}
</div>

<!-- title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>
<!-- Category Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('category', 'Category:') !!}
    {!! Form::select('category', $categories, null, ['class' => 'form-control select2', 'id' => 'category_id']) !!}
</div>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <button type="button" class="btn btn-danger" id="surrender_id"> Surrender</button>
    {!! Form::submit('Resolve', ['class' => 'btn btn-primary', 'id' => 'resolve_submit_id']) !!}
{{--    {!! Form::submit('Issue Parts', ['class' => 'btn btn-default']) !!}--}}
    <button type="button" class="btn btn-primary" id="resolve_id"> Resolve</button>
    <button type="button" class="btn btn-default" id="issue_parts_id"> Issue Parts</button>
</div>

{{--<!-- Submit Field -->--}}
{{--<div class="form-group col-sm-12">--}}
{{--    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}--}}
{{--    <a href="{!! route('tickets.index') !!}" class="btn btn-default">Cancel</a>--}}
{{--</div>--}}

@section('js')

    <script>
        CKEDITOR.replace('description')
        CKEDITOR.replace('issue')
        CKEDITOR.replace('solution')

    </script>
@endsection
