@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="row">
            <div class="col-md-6">
                <h3>
                    Manage Project
                </h3>
            </div>
            <div class="col-md-6">
                <div class="btn-group pull-right">
                    <button type="button" class="btn btn-default">Project Member</button>
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ route('members.index') }}">View Member</a></li>
                        <li><a href="{{ route('members.create') }}?pid={{ $project->id }}&eid={{--{{ $element->id}}--}}">Add Member</a></li>
                    </ul>
                </div>

                <div class="btn-group pull-right">
                    <button type="button" class="btn btn-default">Elements</button>
                    <button typElement e="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ route('elements.index') }}">View Elements</a></li>
                        <li><a href="{{ route('elements.create') }}?pid={{ $project->id }}">Add Element</a></li>
                    </ul>
                </div>

                <div class="btn-group pull-right">
                    <button type="button" class="btn btn-default">My Project</button>
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ route('mainMembers.index') }}">Close</a></li>
                        <li><a href="#">Preview</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Print Final</a></li>
                    </ul>
                </div>
                <table>
                    <tr>
                        <td></td>
                    </tr>
                </table>

            </div>

        </div>
    </section>
    <div class="content">
        <div class="box box-primary">
            @include('flash::message')
            <div class="box-body">
                <div class="row" style="padding-left: 20px; padding-right: 20px">
                    @include('projects.show_fields2')
                    <a href="{{ route('projects.index') }}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
