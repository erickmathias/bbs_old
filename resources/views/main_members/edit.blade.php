@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Main Member
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($mainMember, ['route' => ['mainMembers.update', $mainMember->id], 'method' => 'patch']) !!}

                        @include('main_members.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection