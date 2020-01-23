<!-- Title Field -->
<div class="form-group">
    {!! Form::label('title', 'Title:') !!}
    <p>{{ $knowledgebaseArticle->title }}</p>
</div>

<!-- Category Id Field -->
<div class="form-group">
    {!! Form::label('category_id', 'Category Id:') !!}
    <p>{{ $knowledgebaseArticle->category_id }}</p>
</div>

<!-- Details Field -->
<div class="form-group">
    {!! Form::label('details', 'Details:') !!}
    <p>{{ $knowledgebaseArticle->details }}</p>
</div>

<!-- Uploads Field -->
<div class="form-group">
    {!! Form::label('uploads', 'Uploads:') !!}
    <p>{{ $knowledgebaseArticle->uploads }}</p>
</div>

<!-- Ticket Id Field -->
<div class="form-group">
    {!! Form::label('ticket_id', 'Ticket Id:') !!}
    <p>{{ $knowledgebaseArticle->ticket_id }}</p>
</div>

