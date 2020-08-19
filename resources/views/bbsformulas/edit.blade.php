@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Bbsformula
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($bbsformula, ['route' => ['bbsformulas.update', $bbsformula->id], 'method' => 'patch']) !!}

                        @include('bbsformulas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection