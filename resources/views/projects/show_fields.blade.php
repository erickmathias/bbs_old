<!-- Project Name Field -->
<div class="form-group">
    {!! Form::label('project_name', 'Project Name:') !!}
    <p>{{ $project->project_name }}</p>
</div>

<!-- Client Id Field -->
<div class="form-group">
    {!! Form::label('client_id', 'Client Id:') !!}
    <p>{{ $project->client_id }}</p>
</div>

<!-- Prepared By Field -->
<div class="form-group">
    {!! Form::label('prepared_by', 'Prepared By:') !!}
    <p>{{ $project->prepared_by }}</p>
</div>

<!-- Date Prepared Field -->
<div class="form-group">
    {!! Form::label('date_prepared', 'Date Prepared:') !!}
    <p>{{ $project->date_prepared }}</p>
</div>

<!-- Checked By Field -->
<div class="form-group">
    {!! Form::label('checked_by', 'Checked By:') !!}
    <p>{{ $project->checked_by }}</p>
</div>

<!-- Date Checked Field -->
<div class="form-group">
    {!! Form::label('date_checked', 'Date Checked:') !!}
    <p>{{ $project->date_checked }}</p>
</div>

<!-- Reviewed By Field -->
<div class="form-group">
    {!! Form::label('reviewed_by', 'Reviewed By:') !!}
    <p>{{ $project->reviewed_by }}</p>
</div>

<!-- Date Reviewed Field -->
<div class="form-group">
    {!! Form::label('date_reviewed', 'Date Reviewed:') !!}
    <p>{{ $project->date_reviewed }}</p>
</div>

