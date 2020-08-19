@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Element
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($element, ['route' => ['elements.update', $element->id], 'method' => 'patch']) !!}

                        @include('elements.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection