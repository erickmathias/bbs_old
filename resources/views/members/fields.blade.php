
{{--
<!-- Project Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('project_id', 'Project Id:') !!}
    {!! Form::number('project_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Element Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('element_id', 'Element Id:') !!}
    {!! Form::number('element_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Bar Mark Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bar_mark', 'Bar Mark:') !!}
    {!! Form::text('bar_mark', null, ['class' => 'form-control']) !!}
</div>

<!-- Bar Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bar_type', 'Bar Type:') !!}
    {!! Form::text('bar_type', null, ['class' => 'form-control']) !!}
</div>

<!-- Bar Size Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bar_size', 'Bar Size:') !!}
    {!! Form::text('bar_size', null, ['class' => 'form-control']) !!}
</div>

<!-- Total Members Field -->
<div class="form-group col-sm-6">
    {!! Form::label('total_members', 'Total Members:') !!}
    {!! Form::number('total_members', null, ['class' => 'form-control']) !!}
</div>

<!-- No Of Bar In Each Field -->
<div class="form-group col-sm-6">
    {!! Form::label('no_of_bar_in_each', 'No Of Bar In Each:') !!}
    {!! Form::number('no_of_bar_in_each', null, ['class' => 'form-control']) !!}
</div>

<!-- Total No Of Bars Field -->
<div class="form-group col-sm-6">
    {!! Form::label('total_no_of_bars', 'Total No Of Bars:') !!}
    {!! Form::number('total_no_of_bars', null, ['class' => 'form-control']) !!}
</div>

<!-- Total Length Of Bars Field -->
<div class="form-group col-sm-6">
    {!! Form::label('total_length_of_bars', 'Total Length Of Bars:') !!}
    {!! Form::number('total_length_of_bars', null, ['class' => 'form-control']) !!}
</div>

<!-- Shape Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('shape_code', 'Shape Code:') !!}
    {!! Form::text('shape_code', null, ['class' => 'form-control']) !!}
</div>

<!-- Length A Field -->
<div class="form-group col-sm-6">
    {!! Form::label('length_a', 'Length A:') !!}
    {!! Form::number('length_a', null, ['class' => 'form-control']) !!}
</div>

<!-- Lenth B Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lenth_b', 'Lenth B:') !!}
    {!! Form::number('lenth_b', null, ['class' => 'form-control']) !!}
</div>

<!-- Length C Field -->
<div class="form-group col-sm-6">
    {!! Form::label('length_c', 'Length C:') !!}
    {!! Form::number('length_c', null, ['class' => 'form-control']) !!}
</div>

<!-- Length D Field -->
<div class="form-group col-sm-6">
    {!! Form::label('length_d', 'Length D:') !!}
    {!! Form::number('length_d', null, ['class' => 'form-control']) !!}
</div>

<!-- Lenth E R F Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lenth_e_r_f', 'Lenth E R F:') !!}
    {!! Form::number('lenth_e_r_f', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('members.index') }}" class="btn btn-default">Cancel</a>
</div>
--}}
<?php
   // print_r($element); exit;
$element_options = array();
foreach ($element as $key => $value){
    //echo $value->element_name; exit;
    $element_options[$value->id] = $value->element_name;
}
//print_r($element_options); exit;
?>

<!-- Element Id Field -->
<div class="col-md-12" style="background-color: rgba(225,245,254,0.6);">

{{--    <div class="form-group col-sm-6">
        {!! Form::label('project_id', 'Project Id:') !!}
        {!! Form::number('project_id', null, ['class' => 'form-control']) !!}
    </div>--}}
    {!! Form::open(['route' => 'members.store']) !!}
    {{--{!! Form::open() !!}--}}
    <div class="form-group col-sm-9">
    <fieldset class="form-group">
        <legend class="bg-info text-white" style="font-size: 16px; font-weight: bold; color: maroon;">Initial Member Details</legend>
    <div class="form-group col-sm-2" style="font-size:12px;">
        {!! Form::label('element_id', 'Element:') !!}
        {{--{!! Form::number('element_id', null, ['class' => 'form-control']) !!}--}}
        {!!Form::select('element_id', $element_options, 'S', ['class' => 'form-control input-sm','id'=>'std_code','style'=>'height: 22px;padding: 1px 5px; font-size: 12px; line-height: 1.5;font-size: 12px'])!!}
        {!! Form::hidden('project_id', $project->id, ['class' => 'form-control']) !!}
        {{--{!! Form::hidden('element_id', $eid, ['class' => 'form-control']) !!}--}}
    </div>

    <!-- Name Field -->
    <div class="form-group col-sm-2" style="font-size:12px;" >
        {!! Form::label('name', 'Member Name:') !!}
        {!! Form::text('name', null, ['class' => 'form-control input-sm','required'=>'required','style'=>'height: 22px;padding: 1px 5px; font-size: 12px; line-height: 1.5;']) !!}
    </div>

    <!-- Bar Mark Field -->
    <div class="form-group col-sm-2" style="font-size:12px;">
        {!! Form::label('bar_mark', 'Bar Mark:') !!}
        {!! Form::text('bar_mark', null, ['class' => 'form-control input-sm','required'=>'required','style'=>'height: 22px;padding: 1px 5px; font-size: 12px; line-height: 1.5;']) !!}
    </div>

    <!-- Bar Size Field -->
    <div class="form-group col-sm-2" style="font-size:12px;">
        {!! Form::label('bar_size', 'Bar Size:') !!}
        {!! Form::select('bar_size', $barsize,'S', ['class' => 'form-control input-sm','required'=>'required','style'=>'height: 22px;padding: 1px 5px; font-size: 12px; line-height: 1.5;']) !!}
    </div>

    <!-- Total Members Field -->
    <div class="form-group col-sm-2" style="font-size:10px;">
        {!! Form::label('total_members', 'No of Members:') !!}
        {!! Form::number('total_members', null, ['class' => 'form-control input-sm','required'=>'required','style'=>'height: 22px;padding: 1px 5px; font-size: 12px; line-height: 1.5;']) !!}
    </div>

    <!-- No Of Bar In Each Field -->
    <div class="form-group col-sm-2" style="font-size:9px;">
        {!! Form::label('no_of_bar_in_each', 'No Of Bar In Each:') !!}
        {!! Form::number('no_of_bar_in_each', null, ['class' => 'form-control input-sm','required'=>'required','style'=>'height: 22px;padding: 1px 5px; font-size: 12px; line-height: 1.5;']) !!}
    </div>
    </fieldset>


<fieldset class="form-group">
    <legend class="bg-info text-white" style="font-size: 16px; font-weight: bold; color: maroon;">Shape Code & Dimensions</legend>
<!-- Shape Code Field -->
    <div class="form-group col-sm-2" style="font-size:12px;">
        {!! Form::label('shape_code', 'Shape Code:') !!}
        {!!Form::select('shape_code', $shapecodes, 'S', ['class' => 'form-control input-sm','id'=>'shape_code','required'=>'required','style'=>'height: 22px;padding: 1px 5px; font-size: 12px; line-height: 1.5;'])!!}
    </div>

    <!-- Length A Field -->
    <div class="form-group col-sm-2"  id="length_aa" style="font-size:12px;">
        {!! Form::label('length_a', 'A (mm):') !!}
        {!! Form::number('length_a', null, ['class' => 'form-control input-sm','step'=>'any','id'=>'length_a','style'=>'height: 22px;padding: 1px 5px; font-size: 12px; line-height: 1.5;']) !!}
    </div>

    <!-- Lenth B Field -->
    <div class="form-group col-sm-2" id="length_bb" style="font-size:12px;">
        {!! Form::label('length_b', 'B (mm):') !!}
        {!! Form::number('length_b', null, ['class' => 'form-control input-sm','step'=>'any','id'=>'length_b','style'=>'height: 22px;padding: 1px 5px; font-size: 12px; line-height: 1.5;']) !!}
    </div>

    <!-- Length C Field -->
    <div class="form-group col-sm-2" id="length_cc" style="font-size:12px;">
        {!! Form::label('length_c', 'C (mm):') !!}
        {!! Form::number('length_c', null, ['class' => 'form-control input-sm','step'=>'any','id'=>'length_c','style'=>'height: 22px;padding: 1px 5px; font-size: 12px; line-height: 1.5;']) !!}
    </div>

    <!-- Length D Field -->
    <div class="form-group col-sm-1" id="length_dd" style="font-size:12px;">
        {!! Form::label('length_d', 'D (mm):') !!}
        {!! Form::number('length_d', null, ['class' => 'form-control input-sm','step'=>'any','id'=>'length_d','style'=>'height: 22px;padding: 1px 5px; font-size: 12px; line-height: 1.5;']) !!}
    </div>

    <!-- Lenth E R  Field -->
    <div class="form-group col-sm-1" id="length_ee" style="font-size:12px;">
        {!! Form::label('length_e_r', 'E (mm):') !!}
        {!! Form::number('length_e', null, ['class' => 'form-control input-sm','step'=>'any','id'=>'length_e','style'=>'height: 22px;padding: 1px 5px; font-size: 12px; line-height: 1.5;']) !!}
    </div>

    <div class="form-group col-sm-1" id="length_rr" style="font-size:12px;">
        {!! Form::label('length_e_r', 'R (mm):') !!}
        {!! Form::number('length_r', null, ['class' => 'form-control input-sm','step'=>'any','id'=>'length_r','style'=>'height: 22px;padding: 1px 5px; font-size: 12px; line-height: 1.5;']) !!}
    </div>

    <!-- Lenth F  Field -->
    <div class="form-group col-sm-1" id="length_ff" style="font-size:12px;" >
        {!! Form::label('length_f', 'F (mm):') !!}
        {!! Form::number('length_f', null, ['class' => 'form-control input-sm','step'=>'any','id'=>'length_f','style'=>'height: 22px;padding: 1px 5px; font-size: 12px; line-height: 1.5;']) !!}
    </div>


</fieldset>
    </div>

    <div class="form-group col-md-3">
        <fieldset>
            <legend class="bg-info text-white" style="font-size: 16px; font-weight: bold; color: maroon;">Bending Structure Preview</legend>
            @foreach($scodes as $shape)
                <div class="card" style="width: 30rem;" id="shape-{{$shape->id}}" hidden>
                    <img class="img-thumbnail" src="{{URL('public/storage/images/shapecodes/'.$shape->id.'.png')}}" alt="{{--{{$p->file_name}}--}}"/>
                    <div class="card-body">
                        <p class="card-text" style="color: maroon; font-weight: bold;">SHAPE CODE {{$shape->shape_code}} {{$shape->id}}</p>
                    </div>
                </div>
            @endforeach
        </fieldset>

    </div>

    <!-- Submit Field -->

    <div class="form-group col-sm-12">
        {!! Form::submit('Save', ['class' => 'btn btn-primary col-md-6','id'=>'savemember']) !!}
        <a href="{{ route('members.index') }}" class="btn btn-default col-md-6">Cancel</a>
    </div>
    {!! Form::close() !!}
</div>


{{--<div class="col-md-3" style="background-color: #6c757d;">
    <p>Image Preview</p>
</div>--}}


    <div class="col-md-12">

        <div class="table-responsive">
            <table class="table table-striped" id="members-table" style="font-family: Tahoma,sans-serif; font-size: 12px; border-collapse: collapse; border-spacing:0;">
                <thead>
                <tr>
{{--                    <th>Project Id</th>--}}
                    <th>#</th>
                    <th>MemberName</th>
                    <th>BarMark</th>
                    {{--<th>BarType</th>--}}
                    <th>BarSize</th>
                    <th>NoOfMembers</th>
                    <th>NoOfBarInEach</th>
                    <th>TotalNoOfBars</th>
                    <th>TotalLenOfBars(mm)</th>
                    <th>ShapeCode</th>
                    <th>A(mm)</th>
                    <th>B(mm)</th>
                    <th>C(mm)</th>
                    <th>D(mm)</th>
                    <th>E(mm)</th>
                    <th>R(mm)</th>
                    <th>F(mm)</th>
                    <th colspan="3">Action</th>
                    {{--<th colspan="3">Action</th>--}}
                </tr>
                </thead>
                <tbody>
                <?php $no=0; ?>
                @foreach($members as $member)
                    <tr style="color: darkgreen;">
                        {{--<td>{{ $member->project_id }}</td>--}}
                        <td>{{ ++$no }}</td>
                        <td>{{ $member->name }}</td>
                        <td>{{ $member->bar_mark }}</td>
                        {{--<td>{{ $member->bar_type }}</td>--}}
                        <td>{{ $member->bar_size }}</td>
                        <td>{{ $member->total_members }}</td>
                        <td>{{ $member->no_of_bar_in_each }}</td>
                        <td><b>{{ $member->total_no_of_bars }}</b></td>
                        <td><b>{{ $member->total_length_of_bars }}</b></td>
                        {{--<td>{{ $member->shape_code }}</td>--}}
                        <td>{{ $member->bbsformula->shape_code }}</td>
                        <td>{{ $member->length_a }}</td>
                        <td>{{ $member->length_b }}</td>
                        <td>{{ $member->length_c }}</td>
                        <td>{{ $member->length_d }}</td>
                        <td>{{ $member->length_e }}</td>
                        <td>{{ $member->length_r }}</td>
                        <td>{{ $member->length_f }}</td>
                        <td>
                            {!! Form::open(['route' => ['members.destroy', $member->id], 'method' => 'delete']) !!}
                            <div class='btn-group'>
{{--
                                <a href="{{ route('members.show', [$member->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
--}}
{{--
                                <a href="{{ route('members.edit', [$member->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
--}}
                                {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure you want to delete this member?')"]) !!}
                            </div>
                            {!! Form::close() !!}
                        </td>
{{--                        <td>
                            {!! Form::open(['route' => ['members.destroy', $member->id], 'method' => 'delete']) !!}
                            <div class='btn-group'>
                                <a href="{{ route('members.show', [$member->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                                <a href="{{ route('members.edit', [$member->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                                {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                            </div>
                            {!! Form::close() !!}
                        </td>--}}
                    </tr>

                @endforeach
                </tbody>
                <tfoot>
{{--                <tr>
                    <td colspan="16"><button class="btn btn-primary btn-xs" id="newelement"><i class="glyphicon glyphicon-plus"></i> Print Element</button></td>
                </tr>--}}
                </tfoot>
            </table>
        </div>
    </div>



