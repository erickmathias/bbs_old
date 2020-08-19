<div class="table-responsive">
    <table class="table" id="elements-table">
        <thead>
            <tr>
                <th>Project Id</th>
        <th>Element Name</th>
        <th>Stdcode Id</th>
        <th>Steel Type Id</th>
        <th>Density</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($elements as $element)
            <tr>
                <td>{{ $element->project_id }}</td>
            <td>{{ $element->element_name }}</td>
            <td>{{ $element->stdcode_id }}</td>
            <td>{{ $element->steel_type_id }}</td>
            <td>{{ $element->density }}</td>
                <td>
                    {!! Form::open(['route' => ['elements.destroy', $element->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('elements.show', [$element->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('elements.edit', [$element->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
