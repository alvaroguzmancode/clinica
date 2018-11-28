<!-- Descripcion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    {!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Cobro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cobro', 'Cobro:') !!}
    {!! Form::text('cobro', null, ['class' => 'form-control']) !!}
</div>

<!-- Consultorio Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('consultorio_id', 'Consultorio Id:') !!}
    {!! Form::number('consultorio_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('rentas.index') !!}" class="btn btn-default">Cancel</a>
</div>
