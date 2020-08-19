<div class="table-responsive">
    <table class="table" id="mproperties-table">
        <thead>
            <tr>
                <th>Standard Code Id</th>
        <th>Property</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($mproperties as $mproperty)
            <tr>
                <td>{{ $mproperty->standard_code_id }}</td>
            <td>{{ $mproperty->property }}</td>
                <td>
                    {!! Form::open(['route' => ['mproperties.destroy', $mproperty->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('mproperties.show', [$mproperty->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('mproperties.edit', [$mproperty->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
