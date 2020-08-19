<div class="col-md-12">
<div class="col-md-4">
    <!-- Name Field -->
    <div class="form-group">
        {!! Form::label('name', 'Name:') !!}
        <p>{{ $company->name }}</p>
    </div>

    <!-- Main Activity Field -->
    <div class="form-group">
        {!! Form::label('main_activity', 'Main Activity:') !!}
        <p>{{ $company->main_activity }}</p>
    </div>

    <!-- Postal Address Field -->
    <div class="form-group">
        {!! Form::label('postal_address', 'Postal Address:') !!}
        <p>{{ $company->postal_address }}</p>
    </div>

    <!-- Region Field -->
    <div class="form-group">
        {!! Form::label('region', 'Region:') !!}
        <p>{{ $company->region }}</p>
    </div>

    <!-- National Field -->
    <div class="form-group">
        {!! Form::label('national', 'National:') !!}
        <p>{{ $company->national }}</p>
    </div>
</div>

<div class="col-md-4">

    <!-- Email Field -->
    <div class="form-group">
        {!! Form::label('email', 'Email:') !!}
        <p>{{ $company->email }}</p>
    </div>

    <!-- Fax Field -->
    <div class="form-group">
        {!! Form::label('fax', 'Fax:') !!}
        <p>{{ $company->fax }}</p>
    </div>

    <!-- Telephone Field -->
    <div class="form-group">
        {!! Form::label('telephone', 'Telephone:') !!}
        <p>{{ $company->telephone }}</p>
    </div>

    <!-- Website Field -->
    <div class="form-group">
        {!! Form::label('website', 'Website:') !!}
        <p>{{ $company->website }}</p>
    </div>

    <!-- Municipal Field -->
    <div class="form-group">
        {!! Form::label('municipal', 'Municipal:') !!}
        <p>{{ $company->municipal }}</p>
    </div>

</div>

<div class="col-md-4">
    <!-- Municipal Field -->
    <div class="form-group">
        {!! Form::label('logo', 'Company Logo:') !!}
        <p><img src="{{ asset('public/'.$company->logo_path) }}"></p>
    </div>
</div>
</div>
