<!-- Standard Code Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('standard_code_id', 'Standard Code Id:') !!}
    {!! Form::number('standard_code_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Property Field -->
<div class="form-group col-sm-6">
    {!! Form::label('property', 'Property:') !!}
    {!! Form::text('property', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('mproperties.index') }}" class="btn btn-default">Cancel</a>
</div>
