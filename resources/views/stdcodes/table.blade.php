<div class="table-responsive">
    <table class="table" id="stdcodes-table">
        <thead>
            <tr>
                <th>Standard Code</th>
        <th>Shape Code</th>
        <th>Remarks</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($stdcodes as $stdcode)
            <tr>
                <td>{{ $stdcode->standard_code }}</td>
            <td>{{ $stdcode->shape_code }}</td>
            <td>{{ $stdcode->remarks }}</td>
                <td>
                    {!! Form::open(['route' => ['stdcodes.destroy', $stdcode->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('stdcodes.show', [$stdcode->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('stdcodes.edit', [$stdcode->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
