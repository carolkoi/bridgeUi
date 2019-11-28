<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('users.index') !!}"><i class="fa fa-edit"></i><span>Users</span></a>
</li>

<li class="{{ Request::is('generator_builder*') ? 'active' : '' }}">
    <a href="{!! route('io_generator_builder') !!}"><i class="fa fa-edit"></i><span>Crud Generator</span></a>
</li>

