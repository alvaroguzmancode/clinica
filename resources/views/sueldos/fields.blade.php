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

<!-- Isr Field -->
<div class="form-group col-sm-6">
    {!! Form::label('isr', 'Isr:') !!}
    {!! Form::text('isr', null, ['class' => 'form-control']) !!}
</div>

<!-- Imss Field -->
<div class="form-group col-sm-6">
    {!! Form::label('imss', 'Imss:') !!}
    {!! Form::text('imss', null, ['class' => 'form-control']) !!}
</div>

<!-- Neto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('neto', 'Neto:') !!}
    {!! Form::text('neto', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('sueldos.index') !!}" class="btn btn-default">Cancel</a>
</div>
