<!-- Project Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('project_name', 'Project Name:') !!}
    {!! Form::text('project_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Client Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('client_id', 'Client Name:') !!}
    {{--{!! Form::number('client_id', null, ['class' => 'form-control']) !!}--}}
    {{ Form::select('client_id', $clients,0,['class' => 'form-control']) }}
</div>

<!-- Prepared By Field -->
<div class="form-group col-sm-6">
    {!! Form::label('prepared_by', 'Prepared By:') !!}
    {!! Form::text('prepared_by', null, ['class' => 'form-control']) !!}
</div>

<!-- Date Prepared Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_prepared', 'Date Prepared:') !!}
    {!! Form::date('date_prepared', null, ['class' => 'form-control','id'=>'date_prepared']) !!}
</div>

{{--@push('scripts')
    <script type="text/javascript">
        $('#date_prepared').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush--}}

<!-- Checked By Field -->
<div class="form-group col-sm-6">
    {!! Form::label('checked_by', 'Checked By:') !!}
    {!! Form::text('checked_by', null, ['class' => 'form-control']) !!}
</div>

<!-- Date Checked Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_checked', 'Date Checked:') !!}
    {!! Form::date('date_checked', null, ['class' => 'form-control','id'=>'date_checked']) !!}
</div>

{{--@push('scripts')
    <script type="text/javascript">
        $('#date_checked').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush--}}

<!-- Reviewed By Field -->
<div class="form-group col-sm-6">
    {!! Form::label('reviewed_by', 'Reviewed By:') !!}
    {!! Form::text('reviewed_by', null, ['class' => 'form-control']) !!}
</div>

<!-- Date Reviewed Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_reviewed', 'Date Reviewed:') !!}
    {!! Form::date('date_reviewed', null, ['class' => 'form-control','id'=>'date_reviewed']) !!}
</div>

{{--@push('scripts')
    <script type="text/javascript">
        $('#date_reviewed').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: false
        })
    </script>
@endpush--}}

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('projects.index') }}" class="btn btn-default">Cancel</a>
</div>
