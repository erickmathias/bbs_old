<div class="table-responsive">
    <table class="table" id="clients-table">
        <thead>
            <tr>
                <th>Client Name</th>
        <th>Postal Address</th>
        <th>Street Name</th>
        <th>Municipal</th>
        <th>Region</th>
        <th>Nationality</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($clients as $clients)
            <tr>
                <td>{{ $clients->client_name }}</td>
            <td>{{ $clients->postal_address }}</td>
            <td>{{ $clients->street_name }}</td>
            <td>{{ $clients->municipal }}</td>
            <td>{{ $clients->region }}</td>
            <td>{{ $clients->nationality }}</td>
                <td>
                    {!! Form::open(['route' => ['clients.destroy', $clients->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('clients.show', [$clients->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('clients.edit', [$clients->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
