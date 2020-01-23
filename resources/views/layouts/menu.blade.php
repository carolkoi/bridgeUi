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


<li class="{{ Request::is('categories*') ? 'active' : '' }}">
    <a href="{{ route('categories.index') }}"><i class="fa fa-edit"></i><span>Categories</span></a>
</li>

<li class="{{ Request::is('knowledgebaseArticles*') ? 'active' : '' }}">
    <a href="{{ route('knowledgebaseArticles.index') }}"><i class="fa fa-edit"></i><span>Knowledgebase Articles</span></a>
</li>

<li class="{{ Request::is('resolvedTickets*') ? 'active' : '' }}">
    <a href="{{ route('resolvedTickets.index') }}"><i class="fa fa-edit"></i><span>Resolved Tickets</span></a>
</li>

<li class="{{ Request::is('closedTickets*') ? 'active' : '' }}">
    <a href="{{ route('closedTickets.index') }}"><i class="fa fa-edit"></i><span>Closed Tickets</span></a>
</li>

