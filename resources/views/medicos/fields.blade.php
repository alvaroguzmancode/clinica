<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Apellido Paterno Field -->
<div class="form-group col-sm-6">
    {!! Form::label('apellido_paterno', 'Apellido Paterno:') !!}
    {!! Form::text('apellido_paterno', null, ['class' => 'form-control']) !!}
</div>

<!-- Apellido Materno Field -->
<div class="form-group col-sm-6">
    {!! Form::label('apellido_materno', 'Apellido Materno:') !!}
    {!! Form::text('apellido_materno', null, ['class' => 'form-control']) !!}
</div>

<!-- Curp Field -->
<div class="form-group col-sm-6">
    {!! Form::label('curp', 'Curp:') !!}
    {!! Form::text('curp', null, ['class' => 'form-control']) !!}
</div>

<!-- Cedula Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cedula', 'Cedula:') !!}
    {!! Form::text('cedula', null, ['class' => 'form-control']) !!}
</div>

<!-- Profesion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('profesion', 'Profesion:') !!}
    {!! Form::text('profesion', null, ['class' => 'form-control']) !!}
</div>

<!-- Especialidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('especialidad', 'Especialidad:') !!}
    {!! Form::text('especialidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Fotografia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fotografia', 'Fotografia:') !!}
    {!! Form::text('fotografia', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefono Fijo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefono_fijo', 'Telefono Fijo:') !!}
    {!! Form::text('telefono_fijo', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefono Movil Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefono_movil', 'Telefono Movil:') !!}
    {!! Form::text('telefono_movil', null, ['class' => 'form-control']) !!}
</div>

<!-- Domicilio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('domicilio', 'Domicilio:') !!}
    {!! Form::text('domicilio', null, ['class' => 'form-control']) !!}
</div>

<!-- Codigo Postal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('codigo_postal', 'Codigo Postal:') !!}
    {!! Form::number('codigo_postal', null, ['class' => 'form-control']) !!}
</div>

<!-- Rfc Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rfc', 'Rfc:') !!}
    {!! Form::text('rfc', null, ['class' => 'form-control']) !!}
</div>

<!-- Numero Seguro Social Field -->
<div class="form-group col-sm-6">
    {!! Form::label('numero_seguro_social', 'Numero Seguro Social:') !!}
    {!! Form::text('numero_seguro_social', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', 'Password:') !!}
    {!! Form::password('password', ['class' => 'form-control']) !!}
</div>

<!-- Remember Token Field -->
<div class="form-group col-sm-6">
    {!! Form::label('remember_token', 'Remember Token:') !!}
    {!! Form::text('remember_token', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('medicos.index') !!}" class="btn btn-default">Cancel</a>
</div>
