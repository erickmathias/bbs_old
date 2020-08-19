<!-- Client Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('client_name', 'Client Name:') !!}
    {!! Form::text('client_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Postal Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('postal_address', 'Postal Address:') !!}
    {!! Form::text('postal_address', null, ['class' => 'form-control']) !!}
</div>

<!-- Street Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('street_name', 'Street Name:') !!}
    {!! Form::text('street_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Municipal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('municipal', 'Municipal:') !!}
    {!! Form::text('municipal', null, ['class' => 'form-control']) !!}
</div>

<!-- Region Field -->
<div class="form-group col-sm-6">
    {!! Form::label('region', 'Region:') !!}
    {!! Form::text('region', null, ['class' => 'form-control']) !!}
</div>

<!-- Nationality Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nationality', 'Nationality:') !!}
    {!! Form::text('nationality', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('clients.index') }}" class="btn btn-default">Cancel</a>
</div>
