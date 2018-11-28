@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Centro Medico
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($centroMedico, ['route' => ['centroMedicos.update', $centroMedico->id], 'method' => 'patch']) !!}

                        @include('centro_medicos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection