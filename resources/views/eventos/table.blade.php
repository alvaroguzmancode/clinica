<table class="table table-responsive" id="eventos-table">
    <thead>
        <tr>
            <th>Descripcion</th>
        <th>Fecha Inicio</th>
        <th>Fecha Fin</th>
        <th>Tipo Evento</th>
        <th>Certificado Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($eventos as $evento)
        <tr>
            <td>{!! $evento->descripcion !!}</td>
            <td>{!! $evento->fecha_inicio !!}</td>
            <td>{!! $evento->fecha_fin !!}</td>
            <td>{!! $evento->tipo_evento !!}</td>
            <td>{!! $evento->certificado_id !!}</td>
            <td>
                {!! Form::open(['route' => ['eventos.destroy', $evento->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('eventos.show', [$evento->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('eventos.edit', [$evento->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>