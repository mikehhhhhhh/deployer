<aside class="main-sidebar">
    <section class="sidebar">
        <ul class="sidebar-menu">
            <li class="{{ Request::is('/') ? 'active' : null }}">
                <a href="/">
                    <i class="fa fa-dashboard"></i>
                    <span>{{ Lang::get('app.dashboard') }}</span>
                </a>
            </li>

            @foreach($groups as $group)
            <li class="treeview">
                {{-- (Request::is('projects/*') OR Request::is('deployment/*')) ? 'active' : null --}}
                <a href="#">
                    <i class="fa fa-book"></i>
                    <span>{{ $group->name }}</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    @foreach($group->projects as $project)
                        <li><a href="{{ url('projects', $project->id) }}">{{ $project->name }}</a></li>
                    @endforeach
                </ul>
            </li>
            @endforeach

            <li class="treeview {{ Request::is('admin/*') ? 'active' : null }}">
                <a href="#">
                    <i class="fa fa-gear"></i>
                    <span>{{ Lang::get('app.admin') }}</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('admin/projects') }}">{{ Lang::get('app.projects') }}</a></li>
                    <li><a href="{{ url('admin/groups') }}">{{ Lang::get('app.groups') }}</a></li>
                    <li><a href="{{ url('admin/users') }}">{{ Lang::get('app.users') }}</a></li>
                </ul>
            </li>
        </ul>
    </section>
</aside>
