<table class="table table-responsive" id="consultas-table">
    <thead>
        <tr>
            <th>Descripcion</th>
        <th>Importe</th>
        <th>Monto</th>
        <th>Descuento</th>
        <th>Total</th>
        <th>Metodo Pago</th>
        <th>Consultorio Id</th>
        <th>Medico Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($consultas as $consulta)
        <tr>
            <td>{!! $consulta->descripcion !!}</td>
            <td>{!! $consulta->importe !!}</td>
            <td>{!! $consulta->monto !!}</td>
            <td>{!! $consulta->descuento !!}</td>
            <td>{!! $consulta->total !!}</td>
            <td>{!! $consulta->metodo_pago !!}</td>
            <td>{!! $consulta->consultorio_id !!}</td>
            <td>{!! $consulta->medico_id !!}</td>
            <td>
                {!! Form::open(['route' => ['consultas.destroy', $consulta->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('consultas.show', [$consulta->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('consultas.edit', [$consulta->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>