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
<div class="form-group col-sm-4">
    {!! Form::label('issue_type_id', 'Issue Type:') !!}
    {!! Form::select('issue_type_id', $issue, null, ['class' => 'form-control select2', 'id' => 'issue_type_id']) !!}
</div>


<!-- Business Continuity Impacted Field -->
<div class="form-group col-sm-4">
    {!! Form::label('business_continuity_impacted', 'Business Continuity Impacted:') !!}
    {{--    <label class="checkbox-inline">--}}
    {{--        {!! Form::hidden('business_continuity_impacted', 0) !!}--}}
    {!! Form::checkbox('business_continuity_impacted', '1', null) !!}
    {{--    </label>--}}
</div>


<!-- Image Field -->
<div class="form-group col-sm-12 ">
    {!! Form::label('image', 'Image Uploads or Error Log:') !!}
    <br/>
    <img src="{{$ticket->getFirstMediaUrl('document', 'thumb')}}" />


    {{--    <div class="needsclick dropzone" id="document-dropzone"></div>--}}
</div>
<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['id' => 'description']) !!}
</div>

<!-- Ticket resolving div-->
<div class="col-md-12 resolveTicket">
<!-- Issue Field -->
<div class="form-group col-sm-6 col-lg-6">
    {!! Form::label('issue', 'Issue:') !!}
    {!! Form::textarea('issue', null, ['id' => 'issue']) !!}
</div>

<!-- Solution Field -->
<div class="form-group col-sm-6 col-lg-6 ">
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
<div class="col-md-12 issueParts">
{{--    <h3>Parts Issuance Form</h3>--}}
    <part-component :data="{{json_encode($ticket->id)}}"></part-component>
{{--    <!-- Part Id Field -->--}}
{{--    <div class="form-group col-sm-3">--}}
{{--        {!! Form::label('item_id', 'Select Parts:') !!}--}}
{{--        {!! Form::select('item_id', $items, null, ['class' => 'form-control select2', 'id' => 'item_id']) !!}--}}
{{--    </div>--}}

{{--    <!-- Asset Id Field -->--}}
{{--    <div class="form-group col-sm-3">--}}
{{--        {!! Form::label('asset_id', 'Select Hardware / Asset:') !!}--}}
{{--        {!! Form::select('isset_id', $assets, null, ['class' => 'form-control select2', 'id' => 'asset_id']) !!}--}}
{{--    </div>--}}

{{--    <!-- Quantity Required Field -->--}}
{{--    <div class="form-group col-sm-3">--}}
{{--        {!! Form::label('issued_quantity', 'Required Quantity:') !!}--}}
{{--        {!! Form::number('issued_quantity', null, ['class' => 'form-control', 'id' => 'issued_quantity_id']) !!}--}}
{{--    </div>--}}

{{--    <!-- Available Quantity Field -->--}}
{{--    <div class="form-group col-sm-3" id = "available_quantity_id">--}}
{{--        {!! Form::label('available_quantity', 'Available Quantity:') !!}--}}
{{--        {!! Form::number('available_quantity', null, ['class' => 'form-control']) !!}--}}
{{--    </div>--}}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    <button type="button" class="btn btn-danger" id="surrender_id"> Surrender</button>
    {!! Form::submit('Resolve', ['class' => 'btn btn-primary', 'id' => 'resolve_submit_id']) !!}
    <button type="button" class="btn btn-primary" id="resolve_id"> Resolve</button>
    <button type="button" class="btn btn-default" id="issue_parts_id"> Issue Parts</button>
    <button type="button" class="btn btn-default" id="show_part_id"> Show Parts</button>
</div>


@section('js')

    <script>
        CKEDITOR.replace('description')
        CKEDITOR.replace('issue')
        CKEDITOR.replace('solution')

    </script>
@endsection
