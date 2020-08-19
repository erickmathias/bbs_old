<pagebreak orientation="landscape" />
<!DOCTYPE html>
<html>
<head>
    <style>
        header {
            position: fixed;
            top: -60px;
            left: 0px;
            right: 0px;
            height: 50px;
            margin-top: 10px;

            /** Extra personal styles **/
            background-color: rgba(225,245,254,0.9);
            color: maroon;
            text-align: center;
            line-height: 35px;
            font-family: Century Gothic,Tahoma,sans-serif; font-size: 11px;
        }

        footer {
            position: fixed;
            bottom: -60px;
            left: 0px;
            right: 0px;
            height: 50px;
            font-family: Century Gothic,Tahoma,sans-serif; font-size: 11px;

            /** Extra personal styles **/
            background-color: rgba(225,245,254,0.9);
            color: maroon;
            text-align: center;
            line-height: 35px;
        }

        #table {
            font-family: Century Gothic,Tahoma, Verdana, Segoe, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }


        #contents td, th {
            border: 1px solid rgba(51, 51, 51, 0.2);
            text-align: center;
        }

        #element_title{
            border: 1px solid rgba(51, 51, 51, 0.2);
            font-family: Century Gothic,Tahoma,sans-serif;
            font-size: 11px;
            border-collapse: collapse;
            border-spacing:0;
        }

        #td, #th {
            border: 1px solid #dddddd;
            padding-left: 10px;
            font-family: Century Gothic,Tahoma, Verdana, Segoe, sans-serif;
            font-size: 12px;
            font-style: normal;
            font-variant: normal;
            font-weight: normal;
            line-height: 18px;
            text-align: justify;
        }

        #header, #address{
            font-family: Century Gothic,Tahoma, Verdana, Segoe, sans-serif;
            font-size: 10px;
        }

        #header{
            font-family: Century Gothic,Tahoma, Verdana, Segoe, sans-serif;
            font-size: 20px;
        }

        #tr:nth-child(even) {
            background-color: #dddddd;
        }
        th{
            text-align: left;
        }
        .page-break {
            page-break-after: always;
        }
        .pagenum:before {
            content: counter(page);
        }
    </style>
</head>
<body>

<!-- Define header and footer blocks before your content -->
<header>
    Bar Bending Schedule V 1.0 for {{$project->client->client_name}} - {{ $project->project_name }}  -  Page # <span class="pagenum"></span>
</header>

<footer>
    Copyright &copy; <?php echo date("Y");?> - {{$project->client->company->name}}
</footer>
<main>
<h3 style="margin-top: -21px;"></h3>
<?php
$total_elements = $project->elements->count();
$count_element = 0;
?>
@foreach($project->elements as $element)
    {{--<span class="pagenum"></span>--}}
{{--<h3>{{$element->element_name}}</h3>--}}
<h3 style="margin-top: -21px;"></h3>
<br>
<table width="100%" id="element_title">
    <tr><td colspan="2" style="border-top: 3px double #a5b1d7;"></td></tr>
    <tr style="background-color: rgba(225,245,254,0.5);">
        <td><img src="{{asset('public/'.$project->client->company->logo_path)}}" style="width:70px; height: 70px;"></td>
        <td>
            <table class="table" style="font-size: 12px;" width="100%" >
                <tr>
                    <td style="border-left: 1px solid rgba(51, 51, 51, 0.2); border-right: 1px solid rgba(51, 51, 51, 0.2);border-bottom: 1px solid rgba(51, 51, 51, 0.2);color:maroon; font-weight: bold; text-align: center;">
                        <span style="font-size: 16px;">{{$project->client->company->name}}</span><br>
                            {{$project->client->company->main_activity}}
                    </td>
                    <td style="font-weight: bold;border-bottom: 1px solid rgba(51, 51, 51, 0.2);border-right: 1px solid rgba(51, 51, 51, 0.2); ">Project</td>
                    <td colspan="4" style="color:maroon; font-weight: bold;border-bottom: 1px solid rgba(51, 51, 51, 0.2); text-align: center;">{{ $project->project_name }}</td>
                </tr>
                <tr>
                    <td style="color:maroon; font-weight: bold;border-left: 1px solid rgba(51, 51, 51, 0.2); border-right: 1px solid rgba(51, 51, 51, 0.2);border-bottom: 1px solid rgba(51, 51, 51, 0.2); text-align: center;">{{$project->client->postal_address}} - {{$project->client->street_name}}</td>
                    <td style="font-weight: bold; border-bottom: 1px solid rgba(51, 51, 51, 0.2);border-right: 1px solid rgba(51, 51, 51, 0.2);">Prepare By</td>
                    <td style="color:maroon; font-weight: bold;border-bottom: 1px solid rgba(51, 51, 51, 0.2);border-right: 1px solid rgba(51, 51, 51, 0.2);">{{$project->prepared_by}}</td>
                    <td style="font-weight: bold;border-bottom: 1px solid rgba(51, 51, 51, 0.2);border-right: 1px solid rgba(51, 51, 51, 0.2);">Date</td>
                    <td style="color:maroon; font-weight: bold;border-bottom: 1px solid rgba(51, 51, 51, 0.2);border-right: 1px solid rgba(51, 51, 51, 0.2);">{{date("M,y",strtotime($project->date_prepared))}}</td>
                    <td style="font-weight: bold;border-bottom: 1px solid rgba(51, 51, 51, 0.2);">Std Code</td>
                </tr>
                <tr>
                    <td style="color:maroon; font-weight: bold;border-left: 1px solid rgba(51, 51, 51, 0.2); border-right: 1px solid rgba(51, 51, 51, 0.2);border-bottom: 1px solid rgba(51, 51, 51, 0.2); text-align: center;">{{$project->client->municipal}} - {{$project->client->region}}</td>
                    <td style="font-weight: bold;border-bottom: 1px solid rgba(51, 51, 51, 0.2);border-right: 1px solid rgba(51, 51, 51, 0.2);">Check By</td>
                    <td style="color:maroon; font-weight: bold;border-bottom: 1px solid rgba(51, 51, 51, 0.2);border-right: 1px solid rgba(51, 51, 51, 0.2);">{{$project->checked_by}}</td>
                    <td style="font-weight: bold;border-bottom: 1px solid rgba(51, 51, 51, 0.2);border-right: 1px solid rgba(51, 51, 51, 0.2);">Date</td>
                    <td style="color:maroon; font-weight: bold;border-bottom: 1px solid rgba(51, 51, 51, 0.2);border-right: 1px solid rgba(51, 51, 51, 0.2);">{{date("M,y",strtotime($project->date_checked))}}</td>
                    <td style="color:maroon; font-weight: bold;border-bottom: 1px solid rgba(51, 51, 51, 0.2);">{{$element->stdcode->standard_code}}</td>
                </tr>
                <tr>
                    <td style="color:maroon; font-weight: bold; border-left: 1px solid rgba(51, 51, 51, 0.2); border-right: 1px solid rgba(51, 51, 51, 0.2);  text-align: center;">{{$project->client->company->website}} <br> {{$project->client->company->email}}</td>
                    <td style="font-weight: bold;border-right: 1px solid rgba(51, 51, 51, 0.2);">Element</td>
                    <td style="color:maroon; font-weight: bold;border-right: 1px solid rgba(51, 51, 51, 0.2);">{{$element->element_name}}</td>
                    <td style="font-weight: bold;border-right: 1px solid rgba(51, 51, 51, 0.2);">Rev. Date</td>
                    <td style="color:maroon; font-weight: bold;border-right: 1px solid rgba(51, 51, 51, 0.2);">{{date("M,y",strtotime($project->date_reviewed))}}</td>
                    <td><table width="100%"><tr><td style="font-weight: bold;border-right: 1px solid rgba(51, 51, 51, 0.2);">S/No.</td><td style="color:maroon; font-weight: bold;"><i>{{++$count_element}}/{{$total_elements}}</i></td></tr></table></td>
                </tr>
            </table>
        </td>
    </tr>

    {{--<tr><td colspan="2" style="border-top: 3px double #a5b1d7;"></td></tr>--}}

</table>
<br>
<br>
{{--<table border="1" cellpadding="0" cellspacing="0" width="200px" style="border-collapse:collapse;">--}}
    <table id="contents" class="" width="100%"  style="font-family: Century Gothic,Tahoma,sans-serif; font-size: 12px; border-collapse: collapse; border-spacing:0;">
        <thead>
        <tr>
            <th><center>S/No</center></th>
            <th><center>Member Name</center></th>
            <th><center>Bar Mark</center></th>
            <th><center>Bar Size</center></th>
            <th><center>No. Of Members</center></th>
            <th><center>No. Of Bar In Each</center></th>
            <th><center>Total No. Of Bars</center></th>
            <th><center>Total Length Of Bars (mm)</center></th>
            <th><center>Shape Code</center></th>
            <th><center>Shape</center></th>
            <th><center>A (mm)</center></th>
            <th><center>B (mm)</center></th>
            <th><center>C (mm)</center></th>
            <th><center>D (mm)</center></th>
            <th><center>E/R (mm)</center></th>
            <th><center>F (mm)</center></th>
        </tr>
        </thead>
        <tbody>
        <?php $no=0; ?>
        @foreach($element->members as $member)
            <tr style="color: darkgreen;">
                <td>{{ ++$no }}</td>
                <td>{{ $member->name }}</td>
                <td>{{ $member->bar_mark }}</td>
                <td>{{ $member->bar_size }}</td>
                <td>{{ $member->total_members }}</td>
                <td>{{ $member->no_of_bar_in_each }}</td>
                <td>{{ $member->total_no_of_bars }}</td>
                <td><b>{{ $member->total_length_of_bars }}</b></td>
                <td>{{ $member->bbsformula->shape_code }}</td>
                <td><img src="{{URL('public/storage/images/shapecodes/'.$member->shape_code.'.png')}}" alt="Shape" width="150px;" height="50px;" /></td>
                <td>{{ $member->length_a }}</td>
                <td>{{ $member->lenth_b }}</td>
                <td>{{ $member->length_c }}</td>
                <td>{{ $member->length_d }}</td>
                <td>{{ $member->lenth_e_r }}</td>
                <td>{{ $member->lenth_f }}</td>
            </tr>

        @endforeach
        </tbody>
        <tfoot>
        {{--                <tr>
                            <td colspan="16"><button class="btn btn-primary btn-xs" id="newelement"><i class="glyphicon glyphicon-plus"></i> Print Element</button></td>
                        </tr>--}}
        </tfoot>
    </table>
@if($total_elements <> $count_element)
<div class="page-break"></div>
@endif

@endforeach

</main>
</body>
</html>






