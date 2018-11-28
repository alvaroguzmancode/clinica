<table class="table table-responsive" id="empleados-table">
    <thead>
        <tr>
            <th>Nombre</th>
        <th>Apellido Paterno</th>
        <th>Apellido Materno</th>
        <th>Curp</th>
        <!-- <th>Cedula</th>
        <th>Profesion</th>
        <th>Especialidad</th>
        <th>Fotografia</th>
        <th>Telefono Fijo</th>
        <th>Telefono Movil</th>
        <th>Domicilio</th>
        <th>Codigo Postal</th>
        <th>Rfc</th>
        <th>Numero Seguro Social</th> -->
        <th>Email</th>
       <!-- <th>Password</th>
        <th>Remember Token</th> -->
        <th colspan="3">Action</th>
    </thead>
    <tbody>
    @foreach($empleados as $empleado)
        <tr>
            <td>{!! $empleado->nombre !!} {!! $empleado->apellido_paterno !!} {!! $empleado->apellido_materno !!}</td>
            <td>{!! $empleado->curp !!}</td>
           
            <td>{!! $empleado->email !!}</td>
            <td>{!! $empleado->password !!}</td>
            <td>{!! $empleado->remember_token !!}</td>
            <td>
                {!! Form::open(['route' => ['empleados.destroy', $empleado->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('empleados.show', [$empleado->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('empleados.edit', [$empleado->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>