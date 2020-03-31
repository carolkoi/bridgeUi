<li class="divider" style="color:white; padding: 15px"><span><b>Menu</b></span></li>
{{--<br/>--}}
<li class="{{ Request::is('home*') ? 'active' : '' }}">
    <a href="{{ route('home') }}"><span class="glyphicon glyphicon-home"></span><span>Dashboard</span></a>
</li>

<li class="treeview {{ Request::is('all*') ? 'active menu-open' : '' }}">
    <a class="dropdown-toggle" href="#">
        <span class="glyphicon glyphicon-list-alt"></span> <span>Transaction Manager</span>
        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
    </a>
    <ul class="treeview-menu">
        <li class="{{ Request::is('all/transactions*') ? 'active' : '' }}">
            <a href="{{ route('transactions.index') }}"><span class="glyphicon glyphicon-list"></span><span>All Transactions</span></a>
        </li>
        <li class="{{ Request::is('all/successful-transactions*') ? 'active' : '' }}">
            <a href="{{ route('success-transactions.index') }}"><span class="glyphicon glyphicon-check"></span><span> Successful Transactions</span></a>
        </li>
        <li class="{{ Request::is('all/failed-transactions*') ? 'active' : '' }}">
            <a href="{{ route('failed-transactions.index') }}"><span class="glyphicon glyphicon-ban-circle"></span><span>Failed Transactions</span></a>
        </li>
        <li class="{{ Request::is('all/pending-transactions*') ? 'active' : '' }}">
            <a href="{{ route('pending-transactions.index') }}"><span class="glyphicon glyphicon-upload"></span><span>Pending Transactions</span></a>
        </li>


    </ul>
</li>
<li class="treeview {{ Request::is('charts*') ? 'active menu-open' : '' }}">
    <a class="dropdown-toggle" href="#">
        <span class="glyphicon glyphicon-object-align-bottom"></span><span>High Charts</span>
        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
    </a>
    <ul class="treeview-menu">
        <li class="{{ Request::is('charts/failed-vs-successful*') ? 'active' : '' }}">
            <a href="{{ route('charts.index') }}"><span class="glyphicon glyphicon-random"></span><span>Failed Vs Successful</span></a>

    </ul>
</li>
{{--<br/>--}}

{{--<li class="{{ Request::is('charts*') ? 'active' : '' }}">--}}
{{--    <a href="{{ route('home') }}"><i class="fa fa-edit"></i><span>High Charts</span></a>--}}
{{--</li>--}}
<li class="divider" style="color:white; padding: 15px"><span><b>Parameters</b></span></li>
<li class="treeview {{ Request::is('configurations*') ? 'active menu-open' : '' }}">
    <a class="dropdown-toggle" href="#">
        <span class="glyphicon glyphicon-cog"></span> <span>Switch Settings</span>
        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
    </a>
    <ul class="treeview-menu">
        <li class="{{ Request::is('configurations/globalSettings*') ? 'active' : '' }}">
            <a href="{{ route('globalSettings.index') }}"><i class="fa fa-gears"></i><span>Global Settings</span></a>
        </li>

    </ul>
</li>
<li class="treeview {{ Request::is('all*') ? 'active menu-open' : '' }}">
    <a class="dropdown-toggle" href="#">
        <i class="fa fa-institution"></i> <span>Companies</span>
        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
    </a>
    <ul class="treeview-menu">
        <li class="{{ Request::is('all/companies*') ? 'active' : '' }}">
            <a href="{{ route('companies.index') }}"><i class="fa fa-building"></i><span>Companies</span></a>
        </li>

    </ul>
</li>
<li class="treeview {{ Request::is('all*') ? 'active menu-open' : '' }}">
    <a class="dropdown-toggle" href="#">
        <span class="glyphicon glyphicon-globe"></span><span>Service Providers</span>
        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
    </a>
    <ul class="treeview-menu">
        <li class="{{ Request::is('all/serviceProviders*') ? 'active' : '' }}">
            <a href="{{ route('serviceProviders.index') }}"><span class="glyphicon glyphicon-certificate"></span><span>Service Providers</span></a>

    </ul>
</li>
<li class="divider" style="color:white; padding: 15px"><span><b>Administration</b></span></li>
<li class="treeview {{ Request::is('charts*') ? 'active menu-open' : '' }}">
    <a class="dropdown-toggle" href="#">
        <span class="glyphicon glyphicon-lock"></span><span>Security Module</span>
        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
    </a>
    <ul class="treeview-menu">
        <li class="{{ Request::is('charts/failed-vs-successful*') ? 'active' : '' }}">
            <a href="{{ route('charts.index') }}"><span class="glyphicon glyphicon-user"></span><span>Users</span></a>
        </li>
        <li class="{{ Request::is('charts/failed-vs-successful*') ? 'active' : '' }}">
            <a href="{{ route('charts.index') }}"><span class="glyphicon glyphicon-dashboard"></span><span>Roles</span></a>
        </li>

    </ul>
</li>
<li class="divider" style="color:white; padding: 15px"><span><b>System Reports</b></span></li>
<li class="treeview {{ Request::is('charts*') ? 'active menu-open' : '' }}">
    <a class="dropdown-toggle" href="#">
        <i class="fa fa-book"></i> <span>Reports</span>
        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
    </a>
    <ul class="treeview-menu">
        <li class="{{ Request::is('charts/failed-vs-successful*') ? 'active' : '' }}">
            <a href="{{ route('charts.index') }}"><span class="glyphicon glyphicon-import"></span><span>Incoming Requests</span></a>
        </li>
        <li class="{{ Request::is('charts/failed-vs-successful*') ? 'active' : '' }}">
            <a href="{{ route('charts.index') }}"><span class="glyphicon glyphicon-export"></span><span>Outgoing Requests</span></a>
        </li>

    </ul>
</li>








