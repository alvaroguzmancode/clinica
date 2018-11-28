<table class="table table-responsive" id="sueldos-table">
    <thead>
        <tr>
            <th>Fecha Inicio</th>
        <th>Fecha Fin</th>
        <th>Isr</th>
        <th>Imss</th>
        <th>Neto</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($sueldos as $sueldo)
        <tr>
            <td>{!! $sueldo->fecha_inicio !!}</td>
            <td>{!! $sueldo->fecha_fin !!}</td>
            <td>{!! $sueldo->isr !!}</td>
            <td>{!! $sueldo->imss !!}</td>
            <td>{!! $sueldo->neto !!}</td>
            <td>
                {!! Form::open(['route' => ['sueldos.destroy', $sueldo->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('sueldos.show', [$sueldo->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('sueldos.edit', [$sueldo->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>