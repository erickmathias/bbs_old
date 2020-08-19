<!-- Stdcode Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('stdcode_id', 'Stdcode Id:') !!}
    {!! Form::number('stdcode_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Shape Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('shape_code', 'Shape Code:') !!}
    {!! Form::number('shape_code', null, ['class' => 'form-control']) !!}
</div>

<!-- Shape Field -->
<div class="form-group col-sm-6">
    {!! Form::label('shape', 'Shape:') !!}
    {!! Form::text('shape', null, ['class' => 'form-control']) !!}
</div>

<!-- Formula Field -->
<div class="form-group col-sm-6">
    {!! Form::label('formula', 'Formula:') !!}
    {!! Form::text('formula', null, ['class' => 'form-control']) !!}
</div>

<!-- D6 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('d6', 'D6:') !!}
    {!! Form::number('d6', null, ['class' => 'form-control']) !!}
</div>

<!-- D8 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('d8', 'D8:') !!}
    {!! Form::number('d8', null, ['class' => 'form-control']) !!}
</div>

<!-- D10 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('d10', 'D10:') !!}
    {!! Form::number('d10', null, ['class' => 'form-control']) !!}
</div>

<!-- D12 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('d12', 'D12:') !!}
    {!! Form::number('d12', null, ['class' => 'form-control']) !!}
</div>

<!-- D16 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('d16', 'D16:') !!}
    {!! Form::number('d16', null, ['class' => 'form-control']) !!}
</div>

<!-- D20 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('d20', 'D20:') !!}
    {!! Form::number('d20', null, ['class' => 'form-control']) !!}
</div>

<!-- D25 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('d25', 'D25:') !!}
    {!! Form::number('d25', null, ['class' => 'form-control']) !!}
</div>

<!-- D32 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('d32', 'D32:') !!}
    {!! Form::number('d32', null, ['class' => 'form-control']) !!}
</div>

<!-- D40 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('d40', 'D40:') !!}
    {!! Form::number('d40', null, ['class' => 'form-control']) !!}
</div>

<!-- D50 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('d50', 'D50:') !!}
    {!! Form::number('d50', null, ['class' => 'form-control']) !!}
</div>

<!-- Steel Type T Field -->
<div class="form-group col-sm-6">
    {!! Form::label('steel_type_t', 'Steel Type T:') !!}
    {!! Form::number('steel_type_t', null, ['class' => 'form-control']) !!}
</div>

<!-- Steel Type Y Field -->
<div class="form-group col-sm-6">
    {!! Form::label('steel_type_y', 'Steel Type Y:') !!}
    {!! Form::number('steel_type_y', null, ['class' => 'form-control']) !!}
</div>

<!-- Steel Type R Field -->
<div class="form-group col-sm-6">
    {!! Form::label('steel_type_r', 'Steel Type R:') !!}
    {!! Form::number('steel_type_r', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('bbsformulas.index') }}" class="btn btn-default">Cancel</a>
</div>
