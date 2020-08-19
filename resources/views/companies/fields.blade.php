<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Main Activity Field -->
<div class="form-group col-sm-6">
    {!! Form::label('main_activity', 'Main Activity:') !!}
    {!! Form::text('main_activity', null, ['class' => 'form-control']) !!}
</div>

<!-- Postal Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('postal_address', 'Postal Address:') !!}
    {!! Form::text('postal_address', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Fax Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fax', 'Fax:') !!}
    {!! Form::text('fax', null, ['class' => 'form-control']) !!}
</div>

<!-- Telephone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telephone', 'Telephone:') !!}
    {!! Form::text('telephone', null, ['class' => 'form-control']) !!}
</div>

<!-- Website Field -->
<div class="form-group col-sm-6">
    {!! Form::label('website', 'Website:') !!}
    {!! Form::text('website', null, ['class' => 'form-control']) !!}
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

<!-- National Field -->
<div class="form-group col-sm-6">
    {!! Form::label('national', 'National:') !!}
    {!! Form::text('national', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('logo_path', 'Company Logo:') !!}
    {!! Form::file('logo_path', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('companies.index') }}" class="btn btn-default">Cancel</a>
</div>
