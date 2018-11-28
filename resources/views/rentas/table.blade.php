<table class="table table-responsive" id="rentas-table">
    <thead>
        <tr>
            <th>Descripcion</th>
        <th>Cobro</th>
        <th>Consultorio Id</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($rentas as $renta)
        <tr>
            <td>{!! $renta->descripcion !!}</td>
            <td>{!! $renta->cobro !!}</td>
            <td>{!! $renta->consultorio_id !!}</td>
            <td>
                {!! Form::open(['route' => ['rentas.destroy', $renta->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('rentas.show', [$renta->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('rentas.edit', [$renta->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>