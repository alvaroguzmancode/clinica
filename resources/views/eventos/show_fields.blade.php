<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $evento->id !!}</p>
</div>

<!-- Descripcion Field -->
<div class="form-group">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    <p>{!! $evento->descripcion !!}</p>
</div>

<!-- Fecha Inicio Field -->
<div class="form-group">
    {!! Form::label('fecha_inicio', 'Fecha Inicio:') !!}
    <p>{!! $evento->fecha_inicio !!}</p>
</div>

<!-- Fecha Fin Field -->
<div class="form-group">
    {!! Form::label('fecha_fin', 'Fecha Fin:') !!}
    <p>{!! $evento->fecha_fin !!}</p>
</div>

<!-- Tipo Evento Field -->
<div class="form-group">
    {!! Form::label('tipo_evento', 'Tipo Evento:') !!}
    <p>{!! $evento->tipo_evento !!}</p>
</div>

<!-- Certificado Id Field -->
<div class="form-group">
    {!! Form::label('certificado_id', 'Certificado Id:') !!}
    <p>{!! $evento->certificado_id !!}</p>
</div>

