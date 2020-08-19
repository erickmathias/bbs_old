@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Mproperty
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('mproperties.show_fields')
                    <a href="{{ route('mproperties.index') }}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
