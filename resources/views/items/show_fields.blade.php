<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $item->name }}</p>
</div>

<!-- Qty Available Field -->
<div class="form-group">
    {!! Form::label('qty_available', 'Qty Available:') !!}
    <p>{{ $item->qty_available }}</p>
</div>

<!-- Requested Quantity Field -->
<div class="form-group">
    {!! Form::label('requested_quantity', 'Requested Quantity:') !!}
    <p>{{ $item->requested_quantity }}</p>
</div>

