<div class="table-responsive">
    <table class="table" id="bbsformulas-table">
        <thead>
            <tr>
                <th>Stdcode Id</th>
        <th>Shape Code</th>
        <th>Shape</th>
        <th>Formula</th>
        <th>D6</th>
        <th>D8</th>
        <th>D10</th>
        <th>D12</th>
        <th>D16</th>
        <th>D20</th>
        <th>D25</th>
        <th>D32</th>
        <th>D40</th>
        <th>D50</th>
        <th>Steel Type T</th>
        <th>Steel Type Y</th>
        <th>Steel Type R</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($bbsformulas as $bbsformula)
            <tr>
                <td>{{ $bbsformula->stdcode_id }}</td>
            <td>{{ $bbsformula->shape_code }}</td>
            <td>{{ $bbsformula->shape }}</td>
            <td>{{ $bbsformula->formula }}</td>
            <td>{{ $bbsformula->d6 }}</td>
            <td>{{ $bbsformula->d8 }}</td>
            <td>{{ $bbsformula->d10 }}</td>
            <td>{{ $bbsformula->d12 }}</td>
            <td>{{ $bbsformula->d16 }}</td>
            <td>{{ $bbsformula->d20 }}</td>
            <td>{{ $bbsformula->d25 }}</td>
            <td>{{ $bbsformula->d32 }}</td>
            <td>{{ $bbsformula->d40 }}</td>
            <td>{{ $bbsformula->d50 }}</td>
            <td>{{ $bbsformula->steel_type_t }}</td>
            <td>{{ $bbsformula->steel_type_y }}</td>
            <td>{{ $bbsformula->steel_type_r }}</td>
                <td>
                    {!! Form::open(['route' => ['bbsformulas.destroy', $bbsformula->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('bbsformulas.show', [$bbsformula->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('bbsformulas.edit', [$bbsformula->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
