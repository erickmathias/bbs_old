{{--@extends('layouts.app')--}}


{{--@section('content')--}}

{{--    <div class="row">--}}

{{--        <div class="col-lg-12 margin-tb">--}}

{{--            <div class="pull-left">--}}

{{--                <h2> Show Role</h2>--}}

{{--            </div>--}}

{{--            <div class="pull-right">--}}

{{--                <a class="btn btn-primary" href="{{ route('roles.index') }}"> Back</a>--}}

{{--            </div>--}}

{{--        </div>--}}

{{--    </div>--}}


{{--    <div class="row">--}}

{{--        <div class="col-xs-12 col-sm-12 col-md-12">--}}

{{--            <div class="form-group">--}}

{{--                <strong>Name:</strong>--}}

{{--                {{ $role->name }}--}}

{{--            </div>--}}

{{--        </div>--}}

{{--        <div class="col-xs-12 col-sm-12 col-md-12">--}}

{{--            <div class="form-group">--}}

{{--                <strong>Permissions:</strong>--}}

{{--                @if(!empty($rolePermissions))--}}

{{--                    @foreach($rolePermissions as $v)--}}

{{--                        <label class="label label-success">{{ $v->name }},</label>--}}

{{--                    @endforeach--}}

{{--                @endif--}}

{{--            </div>--}}

{{--        </div>--}}

{{--    </div>--}}

{{--@endsection--}}

@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Show Users</h1>
        <h1 class="pull-right">
            <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('roles.index') }}">Back</a>
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

                        {{ $role->name }}

                    </div>

                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">

                    <div class="form-group">

                        <strong>Permissions:</strong>

                        @if(!empty($rolePermissions))

                            @foreach($rolePermissions as $v)

                                <label class="label label-success">{{ $v->name }},</label>

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
