<!-- Descripcion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    {!! Form::text('descripcion', isset($certificado) ? $certificado->descripcion : '', ['class' => 'form-control']) !!}
</div>

<!-- Tipo Certificado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_certificado', 'Tipo Certificado:') !!}
    {!! 
        Form::select('tipo_certificado',array(
            'Primero'=>'Primero',
            'Segundo'=>'Segundo',
        ),'' );
    !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('certificados.index') !!}" class="btn btn-default">Cancel</a>
</div>