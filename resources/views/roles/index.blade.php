{{--
@extends('layouts.app')


@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Role Management</h2>

            </div>

            <div class="pull-right">

                @can('role-create')

                    <a class="btn btn-success" href="{{ route('roles.create') }}"> Create New Role</a>

                @endcan

            </div>

        </div>

    </div>


    @if ($message = Session::get('success'))

        <div class="alert alert-success">

            <p>{{ $message }}</p>

        </div>

    @endif


    <table class="table table-bordered">

        <tr>

            <th>No</th>

            <th>Name</th>

            <th width="280px">Action</th>

        </tr>

        @foreach ($roles as $key => $role)

            <tr>

                <td>{{ ++$i }}</td>

                <td>{{ $role->name }}</td>

                <td>

                    <a class="btn btn-info" href="{{ route('roles.show',$role->id) }}">Show</a>

                    @can('role-edit')

                        <a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">Edit</a>

                    @endcan

                    @can('role-delete')

                        {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}

                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}

                        {!! Form::close() !!}

                    @endcan

                </td>

            </tr>

        @endforeach

    </table>


    {!! $roles->render() !!}


    <p class="text-center text-primary"><small>Tutorial by ItSolutionStuff.com</small></p>

@endsection

--}}

@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Role Management</h1>
        <h1 class="pull-right">
            <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('roles.create') }}">Create New Role</a>
        </h1>
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
        <div class="box box-primary">
            <div class="box-body">
                <table class="table table-bordered">

                    <tr>

                        <th>No</th>

                        <th>Name</th>

                        <th width="280px">Action</th>

                    </tr>

                    @foreach ($roles as $key => $role)

                        <tr>

                            <td>{{ ++$i }}</td>

                            <td>{{ $role->name }}</td>

                            <td>

                                <a class="btn btn-info" href="{{ route('roles.show',$role->id) }}">Show</a>

                                @can('role-edit')

                                    <a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">Edit</a>

                                @endcan

                                @can('role-delete')

                                    {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}

                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}

                                    {!! Form::close() !!}

                                @endcan

                            </td>

                        </tr>

                    @endforeach

                </table>


                {!! $roles->render() !!}
            </div>
        </div>
        <div class="text-center">

        </div>
    </div>
@endsection

