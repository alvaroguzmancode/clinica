@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Renta
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($renta, ['route' => ['rentas.update', $renta->id], 'method' => 'patch']) !!}

                        @include('rentas.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection