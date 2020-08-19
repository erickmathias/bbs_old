<!-- Standard Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('standard_code', 'Standard Code:') !!}
    {!! Form::text('standard_code', null, ['class' => 'form-control']) !!}
</div>

<!-- Shape Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('shape_code', 'Shape Code:') !!}
    {!! Form::number('shape_code', null, ['class' => 'form-control']) !!}
</div>

<!-- Remarks Field -->
<div class="form-group col-sm-6">
    {!! Form::label('remarks', 'Remarks:') !!}
    {!! Form::text('remarks', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('stdcodes.index') }}" class="btn btn-default">Cancel</a>
</div>
