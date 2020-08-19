<li class="{{ Request::is('home*') ? 'active' : '' }}">
    <a href="{{ url('home') }}"><i class="fa fa-dashboard"></i><span>Dashboard</span></a>
</li>

<li class="{{ Request::is('companies*') ? 'active' : '' }}">
    <a href="{{ route('companies.index') }}"><i class="fa fa-building"></i><span>My Company</span></a>
</li>

<li class="{{ Request::is('clients*') ? 'active' : '' }}">
    <a href="{{ route('clients.index') }}"><i class="fa fa-user-plus"></i><span>My Clients</span></a>
</li>

<li class="{{ Request::is('projects*') ? 'active' : '' }}">
    <a href="{{ route('projects.index') }}"><i class="fa fa-tasks"></i><span>Projects</span></a>
</li>


<li class="{{ Request::is('mainMembers*') ? 'active' : '' }}">
    <a href="{{ route('mainMembers.index') }}"><i class="fa fa-edit"></i><span>Main Members</span></a>
</li>

<li class="{{ Request::is('mproperties*') ? 'active' : '' }}">
    <a href="{{ route('mproperties.index') }}"><i class="fa fa-edit"></i><span>Mproperties</span></a>
</li>

<li class="{{ Request::is('stdcodes*') ? 'active' : '' }}">
    <a href="{{ route('stdcodes.index') }}"><i class="fa fa-edit"></i><span>Stdcodes</span></a>
</li>

<li class="{{ Request::is('members*') ? 'active' : '' }}">
    <a href="{{ route('members.index') }}"><i class="fa fa-edit"></i><span>Members</span></a>
</li>

<li class="{{ Request::is('elements*') ? 'active' : '' }}">
    <a href="{{ route('elements.index') }}"><i class="fa fa-edit"></i><span>Elements</span></a>
</li>

<li class="{{ Request::is('steeltypes*') ? 'active' : '' }}">
    <a href="{{ route('steeltypes.index') }}"><i class="fa fa-edit"></i><span>Steeltypes</span></a>
</li>

<li class="{{ Request::is('bbsformulas*') ? 'active' : '' }}">
    <a href="{{ route('bbsformulas.index') }}"><i class="fa fa-edit"></i><span>Bbsformulas</span></a>
</li>

