<div class="table-responsive">
    <table class="table" id="projects-table">
        <thead>
            <tr>
                <th>#</th>
        <th>Project Name</th>
        <th>Client Id</th>
        <th>Prepared By</th>
        <th>Date Prepared</th>
        <th>Checked By</th>
        <th>Date Checked</th>
        <th>Reviewed By</th>
        <th>Date Reviewed</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        <?php $no = 0; ?>
        @foreach($projects as $project)
            <tr>
                <td>{{ ++$no }}</td>
                <td>{{ $project->project_name }}</td>
            <td>{{ $project->client->client_name }}</td>
            <td>{{ $project->prepared_by }}</td>
            <td>{{ $project->date_prepared }}</td>
            <td>{{ $project->checked_by }}</td>
            <td>{{ $project->date_checked }}</td>
            <td>{{ $project->reviewed_by }}</td>
            <td>{{ $project->date_reviewed }}</td>
                <td>
                    {!! Form::open(['route' => ['projects.destroy', $project->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('projects.show', [encrypt($project->id)]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('projects.edit', [$project->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
