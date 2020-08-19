<div class="table-responsive">
    <table class="table" id="mainMembers-table">
        <thead>
            <tr>
                <th>Member Name</th>
        <th>Stdcode Id</th>
        <th>Mproperty Id</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($mainMembers as $mainMember)
            <tr>
                <td>{{ $mainMember->member_name }}</td>
            <td>{{ $mainMember->stdcode_id }}</td>
            <td>{{ $mainMember->mproperty_id }}</td>
                <td>
                    {!! Form::open(['route' => ['mainMembers.destroy', $mainMember->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('mainMembers.show', [$mainMember->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('mainMembers.edit', [$mainMember->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
