<!-- Member Name Field -->
<div class="col-md-6">
<div class="form-group col-sm-12">
    {!! Form::label('member_name', 'Member Name:') !!}
    {!! Form::text('member_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Stdcode Id Field -->
<div class="form-group col-sm-12">
    {!! Form::label('stdcode_id', 'Standard Code of Practice:') !!}
    {{--{!! Form::number('stdcode_id', null, ['class' => 'form-control']) !!}--}}
    {!!Form::select('stdcode_id', $stdcode, 'S', ['class' => 'form-control','id'=>'std_code'])!!}
</div>

<!-- Mproperty Id Field -->
<div class="form-group col-sm-12" hidden id="mproperty_div">
    {!! Form::label('mproperty_id', 'Material Property:') !!}
    {!!Form::select('mproperty_id', $mproperty, 'S', ['class' => 'form-control'])!!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('mainMembers.index') }}" class="btn btn-default">Cancel</a>
</div>
</div>

