@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Create New Project
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                @if($clients->count() > 0)
                <div class="row">
                    {!! Form::open(['route' => 'projects.store']) !!}

                        @include('projects.fields')

                    {!! Form::close() !!}
                </div>
                @else
                    <div class="row">
                        <div class="col-md-12">
                            <p class="text-warning">Clients not yet Configured!!</p>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
