{{--
@extends('layouts.app')


@section('content')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Users Management</h2>

            </div>

            <div class="pull-right">

                <a class="btn btn-success" href="{{ route('users.create') }}"> Create New User</a>

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

            <th>Email</th>

            <th>Roles</th>

            <th width="280px">Action</th>

        </tr>

        @foreach ($data as $key => $user)

            <tr>

                <td>{{ ++$i }}</td>

                <td>{{ $user->name }}</td>

                <td>{{ $user->email }}</td>

                <td>

                    @if(!empty($user->getRoleNames()))

                        @foreach($user->getRoleNames() as $v)

                            <label class="badge badge-success">{{ $v }}</label>

                        @endforeach

                    @endif

                </td>

                <td>

                    <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>

                    <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>

                    {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}

                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}

                    {!! Form::close() !!}

                </td>

            </tr>

        @endforeach

    </table>


    {!! $data->render() !!}


@endsection

--}}

@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1 class="pull-left">Users Management</h1>
        <h1 class="pull-right">
            <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{{ route('users.create') }}">Create New User</a>
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

                        <th>Email</th>

                        <th>Roles</th>

                        <th width="280px">Action</th>

                    </tr>

                    @foreach ($data as $key => $user)

                        <tr>

                            <td>{{ ++$i }}</td>

                            <td>{{ $user->name }}</td>

                            <td>{{ $user->email }}</td>

                            <td>

                                @if(!empty($user->getRoleNames()))

                                    @foreach($user->getRoleNames() as $v)

                                        <label class="badge badge-success">{{ $v }}</label>

                                    @endforeach

                                @endif

                            </td>

                            <td>

                                <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>

                                <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>

                                {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}

                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}

                                {!! Form::close() !!}

                            </td>

                        </tr>

                    @endforeach

                </table>


                {!! $data->render() !!}
            </div>
        </div>
        <div class="text-center">

        </div>
    </div>
@endsection
