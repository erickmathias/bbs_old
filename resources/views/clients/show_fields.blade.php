<!-- Client Name Field -->
<div class="form-group">
    {!! Form::label('client_name', 'Client Name:') !!}
    <p>{{ $clients->client_name }}</p>
</div>

<!-- Postal Address Field -->
<div class="form-group">
    {!! Form::label('postal_address', 'Postal Address:') !!}
    <p>{{ $clients->postal_address }}</p>
</div>

<!-- Street Name Field -->
<div class="form-group">
    {!! Form::label('street_name', 'Street Name:') !!}
    <p>{{ $clients->street_name }}</p>
</div>

<!-- Municipal Field -->
<div class="form-group">
    {!! Form::label('municipal', 'Municipal:') !!}
    <p>{{ $clients->municipal }}</p>
</div>

<!-- Region Field -->
<div class="form-group">
    {!! Form::label('region', 'Region:') !!}
    <p>{{ $clients->region }}</p>
</div>

<!-- Nationality Field -->
<div class="form-group">
    {!! Form::label('nationality', 'Nationality:') !!}
    <p>{{ $clients->nationality }}</p>
</div>

