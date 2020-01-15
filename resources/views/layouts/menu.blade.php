<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('users.index') !!}"><i class="fa fa-edit"></i><span>Users</span></a>
</li>

<li class="{{ Request::is('generator_builder*') ? 'active' : '' }}">
    <a href="{!! route('io_generator_builder') !!}"><i class="fa fa-edit"></i><span>Crud Generator</span></a>
</li>

<li class="{{ Request::is('departments*') ? 'active' : '' }}">
    <a href="{!! route('departments.index') !!}"><i class="fa fa-edit"></i><span>Departments</span></a>
</li>

<li class="{{ Request::is('tickets*') ? 'active' : '' }}">
    <a href="{!! route('tickets.index') !!}"><i class="fa fa-edit"></i><span>Tickets</span></a>
</li>

<li class="{{ Request::is('issueTypes*') ? 'active' : '' }}">
    <a href="{!! route('issueTypes.index') !!}"><i class="fa fa-edit"></i><span>Issue Types</span></a>
</li>


