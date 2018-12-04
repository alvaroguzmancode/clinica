<!-- Descripcion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    {!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Inicio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_inicio', 'Fecha Inicio:') !!}
    {!! Form::date('fecha_inicio', null, ['class' => 'form-control']) !!}
</div>

<!-- Fecha Fin Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_fin', 'Fecha Fin:') !!}
    {!! Form::date('fecha_fin', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Evento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_evento', 'Tipo Evento:') !!}
    {!! 
        Form::select('tipo_evento', array(
            'Primer'=>'Primer',
            'Segundo'=>'Segundo'
        ));
    !!}
</div>

<!-- Certificado Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('certificado_id', 'Certificado Id:') !!}
    {!! Form::number('certificado_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('eventos.index') !!}" class="btn btn-default">Cancel</a>
</div>
