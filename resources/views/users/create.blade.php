@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Create User
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    @if (count($errors) > 0)

                        <div class="alert alert-danger">

                            <strong>Whoops!</strong> There were some problems with your input.<br><br>

                            <ul>

                                @foreach ($errors->all() as $error)

                                    <li>{{ $error }}</li>

                                @endforeach

                            </ul>

                        </div>

                    @endif



                    {!! Form::open(array('route' => 'users.store','method'=>'POST')) !!}

                    <div class="row">
                        <div class="col-md-6 col-xs-12 col-sm-6">
                        <div class="col-xs-12 col-sm-6 col-md-6">

                            <div class="form-group">

                                <strong>Name:</strong>

                                {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}

                            </div>

                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-6">

                            <div class="form-group">

                                <strong>Email:</strong>

                                {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}

                            </div>

                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-6">

                            <div class="form-group">

                                <strong>Password:</strong>

                                {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}

                            </div>

                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-6">

                            <div class="form-group">

                                <strong>Confirm Password:</strong>

                                {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}

                            </div>

                        </div>

                        <div class="col-xs-12 col-sm-6 col-md-6">

                            <div class="form-group">

                                <strong>Company:</strong>

                                {!!Form::select('company_id', $companies, 'S', ['class' => 'form-control input-sm','id'=>'company','required'=>'required'])!!}

                            </div>

                        </div>

                            <div class="col-xs-12 col-sm-6 col-md-6">

                            <div class="form-group">

                                <strong>Role:</strong>

                                {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!}

                            </div>

                        </div>


                        <div class="col-xs-12 col-sm-12 col-md-12 text-left">

                            <button type="submit" class="btn btn-primary">Submit</button>

                        </div>
                        </div>

                    </div>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

