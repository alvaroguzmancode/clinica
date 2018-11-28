<table class="table table-responsive" id="centroMedicos-table">
    <thead>
        <tr>
            <th>Descripcion</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($centroMedicos as $centroMedico)
        <tr>
            <td>{!! $centroMedico->descripcion !!}</td>
            <td>
                {!! Form::open(['route' => ['centroMedicos.destroy', $centroMedico->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('centroMedicos.show', [$centroMedico->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('centroMedicos.edit', [$centroMedico->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>