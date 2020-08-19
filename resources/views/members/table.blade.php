<div class="table-responsive">
    <table class="table" id="members-table">
        <thead>
            <tr>
                <th>Project Id</th>
        <th>Element Id</th>
        <th>Name</th>
        <th>Bar Mark</th>
        <th>Bar Type</th>
        <th>Bar Size</th>
        <th>Total Members</th>
        <th>No Of Bar In Each</th>
        <th>Total No Of Bars</th>
        <th>Total Length Of Bars</th>
        <th>Shape Code</th>
        <th>Length A</th>
        <th>Lenth B</th>
        <th>Length C</th>
        <th>Length D</th>
        <th>Lenth E R F</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($members as $member)
            <tr>
                <td>{{ $member->project_id }}</td>
            <td>{{ $member->element_id }}</td>
            <td>{{ $member->name }}</td>
            <td>{{ $member->bar_mark }}</td>
            <td>{{ $member->bar_type }}</td>
            <td>{{ $member->bar_size }}</td>
            <td>{{ $member->total_members }}</td>
            <td>{{ $member->no_of_bar_in_each }}</td>
            <td>{{ $member->total_no_of_bars }}</td>
            <td>{{ $member->total_length_of_bars }}</td>
            <td>{{ $member->shape_code }}</td>
            <td>{{ $member->length_a }}</td>
            <td>{{ $member->lenth_b }}</td>
            <td>{{ $member->length_c }}</td>
            <td>{{ $member->length_d }}</td>
            <td>{{ $member->lenth_e_r_f }}</td>
                <td>
                    {!! Form::open(['route' => ['members.destroy', $member->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('members.show', [$member->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('members.edit', [$member->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
