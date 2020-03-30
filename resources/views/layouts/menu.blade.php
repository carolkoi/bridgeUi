<li class="divider" style="color:white; padding: 15px"><span><b>Menu</b></span></li>
{{--<br/>--}}
<li class="{{ Request::is('home*') ? 'active' : '' }}">
    <a href="{{ route('home') }}"><i class="fa fa-edit"></i><span>Dashboard</span></a>
</li>

<li class="treeview {{ Request::is('all*') ? 'active menu-open' : '' }}">
    <a class="dropdown-toggle" href="#">
        <i class="fa fa-tasks"></i> <span>Transaction Manager</span>
        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
    </a>
    <ul class="treeview-menu">
        <li class="{{ Request::is('all/transactions*') ? 'active' : '' }}">
            <a href="{{ route('transactions.index') }}"><i class="fa fa-edit"></i><span>All Transactions</span></a>
        </li>
        <li class="{{ Request::is('all/successful-transactions*') ? 'active' : '' }}">
            <a href="{{ route('success-transactions.index') }}"><i class="fa fa-edit"></i><span> Successful Transactions</span></a>
        </li>
        <li class="{{ Request::is('all/failed-transactions*') ? 'active' : '' }}">
            <a href="{{ route('failed-transactions.index') }}"><i class="fa fa-edit"></i><span>Failed Transactions</span></a>
        </li>
        <li class="{{ Request::is('all/pending-transactions*') ? 'active' : '' }}">
            <a href="{{ route('pending-transactions.index') }}"><i class="fa fa-edit"></i><span>Pending Transactions</span></a>
        </li>


    </ul>
</li>
<li class="treeview {{ Request::is('charts*') ? 'active menu-open' : '' }}">
    <a class="dropdown-toggle" href="#">
        <i class="fa fa-tasks"></i> <span>High Charts</span>
        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
    </a>
    <ul class="treeview-menu">
        <li class="{{ Request::is('charts/failed-vs-successful*') ? 'active' : '' }}">
            <a href="{{ route('charts.index') }}"><i class="fa fa-edit"></i><span>Failed Vs Successful</span></a>

    </ul>
</li>
{{--<br/>--}}

{{--<li class="{{ Request::is('charts*') ? 'active' : '' }}">--}}
{{--    <a href="{{ route('home') }}"><i class="fa fa-edit"></i><span>High Charts</span></a>--}}
{{--</li>--}}
<li class="divider" style="color:white; padding: 15px"><span><b>Parameters</b></span></li>
<li class="treeview {{ Request::is('configurations*') ? 'active menu-open' : '' }}">
    <a class="dropdown-toggle" href="#">
        <i class="fa fa-tasks"></i> <span>Switch Settings</span>
        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
    </a>
    <ul class="treeview-menu">
        <li class="{{ Request::is('configurations/globalSettings*') ? 'active' : '' }}">
            <a href="{{ route('globalSettings.index') }}"><i class="fa fa-edit"></i><span>Global Settings</span></a>
        </li>

    </ul>
</li>
<li class="treeview {{ Request::is('charts*') ? 'active menu-open' : '' }}">
    <a class="dropdown-toggle" href="#">
        <i class="fa fa-tasks"></i> <span>Companies</span>
        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
    </a>
    <ul class="treeview-menu">
        <li class="{{ Request::is('charts/failed-vs-successful*') ? 'active' : '' }}">
            <a href="{{ route('charts.index') }}"><i class="fa fa-edit"></i><span>Companies</span></a>
        </li>

    </ul>
</li>
<li class="treeview {{ Request::is('charts*') ? 'active menu-open' : '' }}">
    <a class="dropdown-toggle" href="#">
        <i class="fa fa-tasks"></i> <span>Service Providers</span>
        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
    </a>
    <ul class="treeview-menu">
        <li class="{{ Request::is('charts/failed-vs-successful*') ? 'active' : '' }}">
            <a href="{{ route('charts.index') }}"><i class="fa fa-edit"></i><span>Service Providers</span></a>

    </ul>
</li>
<li class="divider" style="color:white; padding: 15px"><span><b>Administration</b></span></li>
<li class="treeview {{ Request::is('charts*') ? 'active menu-open' : '' }}">
    <a class="dropdown-toggle" href="#">
        <i class="fa fa-tasks"></i> <span>Security Module</span>
        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
    </a>
    <ul class="treeview-menu">
        <li class="{{ Request::is('charts/failed-vs-successful*') ? 'active' : '' }}">
            <a href="{{ route('charts.index') }}"><i class="fa fa-edit"></i><span>Users</span></a>
        </li>
        <li class="{{ Request::is('charts/failed-vs-successful*') ? 'active' : '' }}">
            <a href="{{ route('charts.index') }}"><i class="fa fa-edit"></i><span>Roles</span></a>
        </li>

    </ul>
</li>
<li class="divider" style="color:white; padding: 15px"><span><b>System Reports</b></span></li>
<li class="treeview {{ Request::is('charts*') ? 'active menu-open' : '' }}">
    <a class="dropdown-toggle" href="#">
        <i class="fa fa-tasks"></i> <span>Reports</span>
        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
    </a>
    <ul class="treeview-menu">
        <li class="{{ Request::is('charts/failed-vs-successful*') ? 'active' : '' }}">
            <a href="{{ route('charts.index') }}"><i class="fa fa-edit"></i><span>Incoming Requests</span></a>
        </li>
        <li class="{{ Request::is('charts/failed-vs-successful*') ? 'active' : '' }}">
            <a href="{{ route('charts.index') }}"><i class="fa fa-edit"></i><span>Outgoing Requests</span></a>
        </li>

    </ul>
</li>








