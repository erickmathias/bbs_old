{{--<!-- Element Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('element_name', 'Element Name:') !!}
    {!! Form::text('element_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Stdcode Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('stdcode_id', 'Stdcode Id:') !!}
    {!! Form::number('stdcode_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Steel Type Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('steel_type_id', 'Steel Type Id:') !!}
    {!! Form::number('steel_type_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Density Field -->
<div class="form-group col-sm-6">
    {!! Form::label('density', 'Density:') !!}
    {!! Form::number('density', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('elements.index') }}" class="btn btn-default">Cancel</a>
</div>--}}

<!-- Element Name Field -->
{{--<div class="form-group col-sm-6">
    {!! Form::label('element_name', 'Element Name:') !!}
    {!! Form::text('element_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Stdcode Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('stdcode_id', 'Stdcode Id:') !!}
    {!! Form::number('stdcode_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Mproperty Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mproperty_id', 'Mproperty Id:') !!}
    {!! Form::number('mproperty_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('elements.index') }}" class="btn btn-default">Cancel</a>
</div>--}}

<!-- Member Name Field -->
<div class="col-md-6">
    <div class="form-group col-sm-12">
        {!! Form::label('element_name', 'Member Name:') !!}
        {!! Form::text('element_name', null, ['class' => 'form-control input-sm']) !!}
    </div>

    <!-- Stdcode Id Field -->
    <div class="form-group col-sm-12">
        {!! Form::label('stdcode_id', 'Standard Code of Practice:') !!}
        {{--{!! Form::number('stdcode_id', null, ['class' => 'form-control']) !!}--}}
        {!!Form::select('stdcode_id', $stdcode, 'S', ['class' => 'form-control input-sm','id'=>'std_code'])!!}
    </div>

    <!-- Mproperty Id Field -->
    <div class="form-group col-sm-12"  id="steel_type_div">
        {!! Form::label('steel_type_id', 'Steel Type:') !!}
        {!!Form::select('steel_type_id', $steeltype, 'S', ['class' => 'form-control input-sm'])!!}
    </div>

    <div class="form-group col-sm-12">
        {!! Form::label('density', 'Density (Kilogram per Cubic Metre):') !!}
        {!! Form::text('density', 7850, ['class' => 'form-control input-sm']) !!}
        {!! Form::hidden('project_id', $pid, ['class' => 'form-control']) !!}
    </div>

    <!-- Submit Field -->
    <div class="form-group col-sm-12">
        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
        <a href="{{ route('mainMembers.index') }}" class="btn btn-default">Cancel</a>
    </div>

</div>


