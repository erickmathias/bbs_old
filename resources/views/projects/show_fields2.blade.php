{{--{{dd($project->client->company->logo_path)}}--}}
        <div class="table-responsive">
{{--        <table class="table table-bordered" style="font-size: 11px;">
            <tr>
                <td><br><br><br>COMPANY LOGO</td>
                <td>
                    <table class="table table-bordered">
                        <tr>
                            <td style="text-align: center; color: red;">[Company’s Name]</td>
                            <td>Project Name</td>
                            <td colspan="4" style="text-align: center; color: red;">[{{ $project->project_name }}]</td>
                        </tr>
                        <tr>
                            <td style="text-align: center; color: red;">[Company’s Box Address – Company’s Street]</td>
                            <td>Prepared By</td>
                            <td style="text-align: center; color: red;">[{{ $project->prepared_by }}]</td>
                            <td>Date Prepared</td>
                            <td style="text-align: center; color: red;">[Prepared By]</td>
                            <td>Standard Code of Practice</td>
                        </tr>
                        <tr>
                            <td style="text-align: center; color: red;">[Company’s Municipality – Company’s Region]</td>
                            <td>Checked By</td>
                            <td style="text-align: center; color: red;">[{{ $project->checked_by }}]</td>
                            <td>Date Checked</td>
                            <td style="text-align: center; color: red;">[Checked By]</td>
                            <td>[Standard Code of Practice]</td>
                        </tr>

                        <tr>
                            <td style="text-align: center; color: red;">[Company’s Website Address]
                                [Company’s Email Address]
                            </td>
                            <td>Member</td>
                            <td style="text-align: center; color: red;">[Member]</td>
                            <td>Date Revised</td>
                            <td style="text-align: center; color: red;">[{{ $project->date_reviewed }}]</td>
                            <td>
                                <table class="table table-bordered">
                                    <tr>
                                        <td>S/ No.</td>
                                        <td style="text-align: center; color: red;">1/ nth</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                    </table>
                </td>
            </tr>
        </table>--}}

            <table class="table table-bordered" style="font-size: 11px;">
                <tr style="background-color: rgba(225,245,254,0.5);">
                    <td><img src="{{asset('public/'.$project->client->company->logo_path)}}" style="width:70px; height: 70px;"></td>
                       <td>
                        <table class="table" style="font-size: 14px;">
                            <tr>
                                <td style="" colspan="3">PROJECT NAME: {{ $project->project_name }}</td>
                                <td></td>
                                <td></td>
                                <td style="" colspan="3">PROJECT NAME: {{ $project->project_name }}</td>
                            </tr>
                            <tr>
                                <td colspan="3">DATE CREATED: {{ $project->date_prepared}}</td>
                                <td></td>
                                <td></td>
                                <td colspan="3">DATE REVIEWED: {{ $project->date_reviewed}}</td>
                            </tr>
                            {{--<tr>
                                <td>Element Name: {{ $element->element_name}}</td>
                                <td>Standard Code: {{ $element->stdcode->standard_code}}</td>
                                <td>Steel Type Name: {{ $element->steeltype->name}}</td>
                            </tr>--}}
                        </table>
                    </td>
                    <td><img src="{{asset('public/'.$project->client->company->logo_path)}}" style="width:70px; height: 70px;" class="pull-right"></td>
                </tr>
                <tr id="elementslistheader">
                    <td colspan="3">Project Elements</td>
                </tr>
                <tr id="elementslist" style="background-color: rgba(225,245,254,0.6);">
                    <td colspan="3">
                        <table class="table table-bordered">
                            @if($element->count())
                            <tr>
                               <th>#</th>
                               <th>Element Name</th>
                               <th>Standard Code</th>
                               <th>Steel Type</th>
                               <th>Density</th>
                               <th>Total Members</th>
                               <th>Option</th>
                            </tr>
                            @foreach($element as $value)
                            <tr style="color: maroon;">
                                <td>#</td>
                                <td>{{$value->element_name}}</td>
                                <td>{{ $value->stdcode->standard_code}}</td>
                                <td>{{ $value->steeltype->name}}</td>
                                <td>{{ $value->density}}</td>
                                <td>{{ $value->members->count()}}</td>
                                <td>
                                    {!! Form::open(['route' => ['projects.destroy', $project->id], 'method' => 'delete']) !!}
                                    <div class='btn-group'>
                                        <a href="{{ route('members.create', ['pid'=>encrypt($project->id),'eid'=>encrypt($value->id)]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                                        <a href="{{ route('members.edit', [$value->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                                    </div>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                            @endforeach
                            @endif
                        </table>
                    </td>
                </tr>
                <tr>
                  {{--  <td colspan=""><button class="btn btn-primary btn-xs" id="newelement"><i class="glyphicon glyphicon-plus"></i> Add Project Element</button></td>--}}
                    <td colspan="3">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="#" class="btn btn-default" id="newelement"><i class="glyphicon glyphicon-plus"></i> New Element</a>
                            <a href="{{route('project.cover.print',[encrypt($project->id)])}}" class="btn btn-default" id="printproject"><i class="glyphicon glyphicon-print"></i> Print Project Cover</a>
                            <a href="{{route('project.content.print',[encrypt($project->id)])}}" class="btn btn-default" id="printproject2"><i class="glyphicon glyphicon-print"></i> Print Project Content</a>
                        </div>
                    </td>
                </tr>
            </table>

        </div>

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
        <div class="row" style="background-color: rgba(225,245,254,0.6);">

        <div class="col-md-6" hidden id="elementform">
            {!! Form::open(['route' => 'elements.store']) !!}
            <div class="form-group col-sm-6">
                {!! Form::label('element_name', 'Member Name:') !!}
                {!! Form::text('element_name', null, ['class' => 'form-control input-sm']) !!}
            </div>

            <!-- Stdcode Id Field -->
            <div class="form-group col-sm-6">
                {!! Form::label('stdcode_id', 'Standard Code of Practice:') !!}
                {{--{!! Form::number('stdcode_id', null, ['class' => 'form-control']) !!}--}}
                {!!Form::select('stdcode_id', $stdcode, 'S', ['class' => 'form-control input-sm','id'=>'std_code'])!!}
            </div>

            <!-- Mproperty Id Field -->
            <div class="form-group col-sm-6"  id="steel_type_div">
                {!! Form::label('steel_type_id', 'Steel Type:') !!}
                {!!Form::select('steel_type_id', $steeltype, 'S', ['class' => 'form-control input-sm'])!!}
            </div>

            <div class="form-group col-sm-6">
                {!! Form::label('density', 'Density (Kilogram per Cubic Metre):') !!}
                {!! Form::text('density', 7850, ['class' => 'form-control input-sm']) !!}
                {!! Form::hidden('project_id', $pid, ['class' => 'form-control input-sm']) !!}
            </div>

            <!-- Submit Field -->
            <div class="form-group col-sm-12">
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                <a href="{{--{{ route('mainMembers.index') }}--}}" class="btn btn-default" id="cancelelementform">Cancel</a>
            </div>
            {!! Form::close() !!}
        </div>
        </div>





