@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Consultorio
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($consultorio, ['route' => ['consultorios.update', $consultorio->id], 'method' => 'patch']) !!}

                        @include('consultorios.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection