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
            font-size: 16px;
        }
        #header2{
            font-family: Century Gothic,Tahoma, Verdana, Segoe, sans-serif;
            font-size: 14px;
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
    </style>
</head>
<body>
<!-- Define header and footer blocks before your content -->
<header>
    Bar Bending Schedule V 1.0
</header>

<footer>
    Copyright &copy; <?php echo date("Y");?> - {{$project->client->company->name}}
</footer>
<main>
<h3 style="margin-top: -21px;"></h3>
<table width="100%">

{{--        <td style="width:100%;">
            <center><img class="" src="{{ asset('public/global_assets/images/placeholders/placeholder.jpg') }}" width="125" height="120" alt=""></center>
        </td>--}}
    <tr><td colspan="3" style="border-top: 3px double #a5b1d7;"></td></tr>
    <tr>
        <td style="width: 100%">
            <center >
                <h2 id="header">STRUCTURAL ENGINEERING BAR BENDING SCHEDULE (BBS) - REPORT</h2>

                <br>
                <br>
                <br>

                <h3 id="header2">PREPARED BY</h3>
                <p id="address" style="color:maroon; font-size: 16px; font-weight: bold;">
                    {{$project->client->company->name}}
                </p>
                <p id="address" style="color:maroon; font-size: 12px;">
                    {{$project->client->company->main_activity}}
                </p>
                <p id="address" style="color:#3a3535; font-size: 12px;">
                    {{$project->client->company->postal_address}}
                </p>
                <p id="address" style="color:maroon; font-size: 12px;">
                    {{$project->client->company->municipal}} - {{$project->client->company->region}}, {{$project->client->company->national}}
                </p>
                {{--<p id="address" style="color:maroon; font-size: 14px;">
                    Region Name: {{$project->client->company->region." - ".$project->client->company->national}}
                </p>--}}
                {{--<p id="address" style="color:maroon; font-size: 14px;">
                    {{$project->client->company->national}}
                </p>--}}
               {{-- <p id="address" style="color:maroon; font-size: 14px;">
                    Tellephone: {{$project->client->company->telephone}}
                </p>--}}
{{--                <p id="address" style="color:maroon; font-size: 14px;">
                    Fax: {{$project->client->company->fax}}
                </p>--}}
                <p id="address" style="color:maroon; font-weight: bold; font-size: 12px;">
                    Email: {{$project->client->company->email}}
                </p>
                <p id="address" style="color:maroon; font-weight: bold; font-size: 12px;">
                    Website: {{$project->client->company->website}}
                </p>
                <br>
                <p>
                    <img src="{{asset('public/'.$project->client->company->logo_path)}}" style="width:120px; height: 120px;">
                </p>
                <br>
                <br>
                <br>
                <h3 id="header2">PPROJECT NAME</h3>
                <p id="address" style="color:maroon; font-weight: bold; font-size: 12px;">
                    {{$project->project_name}}
                </p>
                <br>
                <br>
                <br>
                <br>
                <br>
                <br>
                <h3 id="header2">CLIENT INFORMATION</h3>
                <p id="address" style="color:maroon; font-weight: bold; font-size: 12px;">
                    {{$project->client->client_name}}
                </p>
                <p id="address" style="color:#3a3535; font-size: 12px;">
                    {{$project->client->postal_address}} - {{$project->client->street_name}}
                </p>
               {{-- <p id="address" style="color:#3a3535; font-size: 14px;">
                    {{$project->client->street_name}}
                </p>--}}
                <p id="address" style="color:#3a3535; font-size: 12px;">
                    {{$project->client->municipal}} - {{$project->client->region}}, {{$project->client->nationality}}
                </p>
                {{--<p id="address" style="color:maroon; font-size: 14px;">
                    {{$project->client->region}} - {{$project->client->nationality}}
                </p>--}}
            </center>
        </td>

    </tr>
<br>
</table>
<table width="100%" style="font-family: Century Gothic,Tahoma, Verdana, Segoe, sans-serif; font-size: 12px;">
    <tr><td colspan="3" style="border-top: 2px double #a5b1d7;"></td></tr>
    <tr>
        <td>Date Prepared</td>
        <td style="text-align: center">Date Checked</td>
        <td style="text-align: right">Date Reviewed</td>
    </tr>
    <tr>
        <td>{{date("M-Y",strtotime($project->date_prepared))}}</td>
        <td style="text-align: center">{{date("M-Y",strtotime($project->date_checked))}}</td>
        <td style="text-align: right">{{date("M-Y",strtotime($project->date_reviewed))}}</td>
    </tr>
    <tr><td colspan="3" style="border-top: 2px double #a5b1d7;"></td></tr>
</table>
</main>
</body>
</html>






