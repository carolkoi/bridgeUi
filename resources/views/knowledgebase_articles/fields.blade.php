<!-- Title Field -->
<div class="form-group col-sm-6">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Category Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('category_id', 'Category Id:') !!}
    {!! Form::number('category_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Details Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('details', 'Details:') !!}
    {!! Form::textarea('details', null, ['class' => 'form-control']) !!}
</div>

<!-- Uploads Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('uploads', 'Uploads:') !!}
    {!! Form::textarea('uploads', null, ['class' => 'form-control']) !!}
</div>

<!-- Ticket Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ticket_id', 'Ticket Id:') !!}
    {!! Form::number('ticket_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('knowledgebaseArticles.index') }}" class="btn btn-default">Cancel</a>
</div>
