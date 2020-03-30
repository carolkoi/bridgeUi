<!-- Serviceproviderid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('serviceproviderid', 'Serviceproviderid:') !!}
    {!! Form::number('serviceproviderid', null, ['class' => 'form-control']) !!}
</div>

<!-- Setting Field -->
<div class="form-group col-sm-6">
    {!! Form::label('setting', 'Setting:') !!}
    {!! Form::text('setting', null, ['class' => 'form-control']) !!}
</div>

<!-- Settingvalue Field -->
<div class="form-group col-sm-6">
    {!! Form::label('settingvalue', 'Settingvalue:') !!}
    {!! Form::text('settingvalue', null, ['class' => 'form-control']) !!}
</div>

<!-- Valuetype Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valuetype', 'Valuetype:') !!}
    {!! Form::text('valuetype', null, ['class' => 'form-control']) !!}
</div>

<!-- Addedby Field -->
<div class="form-group col-sm-6">
    {!! Form::label('addedby', 'Addedby:') !!}
    {!! Form::number('addedby', null, ['class' => 'form-control']) !!}
</div>

<!-- Ipaddress Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ipaddress', 'Ipaddress:') !!}
    {!! Form::text('ipaddress', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('globalSettings.index') }}" class="btn btn-default">Cancel</a>
</div>
