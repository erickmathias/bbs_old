{{--
@extends('layouts.app')


@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2> Show User</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>

            </div>

        </div>

    </div>


    <div class="row">

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Name:</strong>

                {{ $user->name }}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Email:</strong>

                {{ $user->email }}

            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">

            <div class="form-group">

                <strong>Roles:</strong>

                @if(!empty($user->getRoleNames()))

                    @foreach($user->getRoleNames() as $v)

                        <label class="badge badge-success">{{ $v }}</label>

                    @endforeach

                @endif

            </div>

        </div>

    </div>

@endsection

--}}


@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Show Users</h1>
        <h1 class="pull-right">
            <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('users.index') }}">Back</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">

                <div class="col-xs-12 col-sm-12 col-md-12">

                    <div class="form-group">

                        <strong>Name:</strong>

                        {{ $user->name }}

                    </div>

                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">

                    <div class="form-group">

                        <strong>Email:</strong>

                        {{ $user->email }}

                    </div>

                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">

                    <div class="form-group">

                        <strong>Company:</strong>

                        {{ $user->company->name }}

                    </div>

                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">

                    <div class="form-group">

                        <strong>Roles:</strong>

                        @if(!empty($user->getRoleNames()))

                            @foreach($user->getRoleNames() as $v)

                                <label class="badge badge-success">{{ $v }}</label>

                            @endforeach

                        @endif

                    </div>

                </div>
            </div>
        </div>
        <div class="text-center">

        </div>
    </div>
@endsection
