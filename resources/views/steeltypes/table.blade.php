<div class="table-responsive">
    <table class="table" id="steeltypes-table">
        <thead>
            <tr>
                <th>Name</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($steeltypes as $steeltype)
            <tr>
                <td>{{ $steeltype->name }}</td>
                <td>
                    {!! Form::open(['route' => ['steeltypes.destroy', $steeltype->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('steeltypes.show', [$steeltype->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('steeltypes.edit', [$steeltype->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
