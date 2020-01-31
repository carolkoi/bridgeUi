
{{--<li class="{{ Request::is('generator_builder*') ? 'active' : '' }}">--}}
{{--    <a href="{!! route('io_generator_builder') !!}"><i class="fa fa-edit"></i><span>Crud Generator</span></a>--}}
{{--</li>--}}

<li class="treeview {{ Request::is('all*') ? 'active menu-open' : '' }}">
    <a class="dropdown-toggle" href="#">
        <i class="fa fa-ticket"></i> <span>Tickets</span>
        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
    </a>
    <ul class="treeview-menu">
        <li class="{{ Request::is('all/tickets*') ? 'active' : '' }}">
            <a href="{!! route('tickets.index') !!}"><i class="fa fa-edit"></i><span>All Tickets</span></a>
        </li>

        <li class="{{ Request::is('all/resolvedTickets*') ? 'active' : '' }}">
            <a href="{{ route('resolvedTickets.index') }}"><i class="fa fa-edit"></i><span>Resolved Tickets</span></a>
        </li>

        <li class="{{ Request::is('all/closedTickets*') ? 'active' : '' }}">
            <a href="{{ route('closedTickets.index') }}"><i class="fa fa-edit"></i><span>Closed Tickets</span></a>
        </li>
    </ul>
</li>

{{--<li class="{{ Request::is('departments*') ? 'active' : '' }}">--}}
{{--    <a href="{!! route('departments.index') !!}"><i class="fa fa-edit"></i><span>Departments</span></a>--}}
{{--</li>--}}

<li class="{{ Request::is('knowledgebaseArticles*') ? 'active' : '' }}">
    <a href="{{ route('knowledgebaseArticles.index') }}"><i class="fa fa-edit"></i><span>Knowledgebase Articles</span></a>
</li>
<li class="treeview {{ Request::is('settings*') ? 'active menu-open' : '' }}">
    <a class="dropdown-toggle" href="#">
        <i class="fa fa-truck"></i> <span>Settings</span>
        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
    </a>
    <ul class="treeview-menu">
        <li class="{{ Request::is('settings/users*') ? 'active' : '' }}">
            <a href="{!! route('users.create') !!}"><i class="fa fa-edit"></i><span>HR Staff List</span></a>
        </li>

        <li class="{{ Request::is('settings/issueTypes*') ? 'active' : '' }}">
            <a href="{!! route('issueTypes.index') !!}"><i class="fa fa-edit"></i><span>Issue Types</span></a>
        </li>

        <li class="{{ Request::is('settings/categories*') ? 'active' : '' }}">
            <a href="{{ route('categories.index') }}"><i class="fa fa-edit"></i><span>Categories</span></a>
        </li>
    </ul>
</li>



<li class="{{ Request::is('items*') ? 'active' : '' }}">
    <a href="{{ route('items.index') }}"><i class="fa fa-edit"></i><span>Items</span></a>
</li>

<li class="{{ Request::is('assets*') ? 'active' : '' }}">
    <a href="{{ route('assets.index') }}"><i class="fa fa-edit"></i><span>Assets</span></a>
</li>

<li class="{{ Request::is('maintenanceSchedules*') ? 'active' : '' }}">
    <a href="{{ route('maintenanceSchedules.index') }}"><i class="fa fa-edit"></i><span>Maintenance Schedules</span></a>
</li>

<li class="{{ Request::is('cycles*') ? 'active' : '' }}">
    <a href="{{ route('cycles.index') }}"><i class="fa fa-edit"></i><span>Cycles</span></a>
</li>

{{--<li class="{{ Request::is('checklists*') ? 'active' : '' }}">--}}
{{--    <a href="{{ route('checklists.index') }}"><i class="fa fa-edit"></i><span>Checklists</span></a>--}}
{{--</li>--}}

<li class="{{ Request::is('maintenanceRecords*') ? 'active' : '' }}">
    <a href="{{ route('maintenanceRecords.index') }}"><i class="fa fa-edit"></i><span>Maintenance Records</span></a>
</li>

