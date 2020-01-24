<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Qty Available Field -->
<div class="form-group col-sm-6">
    {!! Form::label('qty_available', 'Qty Available:') !!}
    {!! Form::number('qty_available', null, ['class' => 'form-control']) !!}
</div>

<!-- Requested Quantity Field -->
<div class="form-group col-sm-6">
    {!! Form::label('requested_quantity', 'Requested Quantity:') !!}
    {!! Form::number('requested_quantity', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('items.index') }}" class="btn btn-default">Cancel</a>
</div>
