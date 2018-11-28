<table class="table table-responsive" id="medicos-table">
    <thead>
        <tr>
        <th>Nombre</th>
        <th>Curp</th>
        <th>Cedula</th>
        <th>Profesion</th>
        <th>Especialidad</th>
       <!-- <th>Fotografia</th>
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
        </tr>
    </thead>
    <tbody>
    @foreach($medicos as $medico)
        <tr>
            <td>{!! $medico->nombre !!} {!! $medico->apellido_paterno !!} {!! $medico->apellido_materno !!}</td>
            <td>{!! $medico->curp !!}</td>
            <td>{!! $medico->cedula !!}</td>
            <td>{!! $medico->profesion !!}</td>
            <td>{!! $medico->especialidad !!}</td> 
            <!--<td>{ /*$medico->fotografia*/ }</td>
            <td>{ /*$medico->telefono_fijo*/ }</td>
            <td>{ /*$medico->telefono_movil*/ }</td>
            <td>{ /*$medico->domicilio*/ }</td>
            <td>{ /*$medico->codigo_postal*/ }</td>
            <td>{ /*$medico->rfc*/ }</td>
            <td>{ /*$medico->numero_seguro_social*/ }</td> -->
            <td>{!! $medico->email !!}</td>
            <!-- <td>{ /*$medico->password*/ }</td>
            <td>{ /*$medico->remember_token*/ }</td> -->
            <td>
                {!! Form::open(['route' => ['medicos.destroy', $medico->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('medicos.show', [$medico->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('medicos.edit', [$medico->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>