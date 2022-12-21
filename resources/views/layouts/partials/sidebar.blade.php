<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <i class="fas fa-smile-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">KJA's Com <sup>20</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ url('/dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        More Info
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
                <li class="nav-item active">
                    <a class="nav-link text-white {{ 'recent-post' == request()->path() ? 'active' : '' }}"
                        href="{{ '/recent-post' }}"><i class="fas fa-list"></i><span class="fas fa-commenting-o"></span>Recent Talks</a>
                </li>

                @role('admin')
                    <span class="nav-line"></span>
                    {{-- <li class="nav-item">
                        <a class="nav-link text-white {{ 'contact' == request()->path() ? 'active' : '' }}"
                            href="{{ '/contact' }}">Contacts</a>
                    </li> --}}
                    <span class="nav-line"></span>

                    <span class="nav-line"></span>

                    <div class="dropdown">
                        <a class="btn dropdown-toggle text-warning bg-secondary" type="button" id="dropdownMenuButton" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false"><i class="fas fa-book"></i><span> Admin</span>
                        </a>
                        <div class="dropdown-menu bg-success bg-opacity-75" aria-labelledby="dropdownMenuButton" id="select3">

                            <li class="nav-item">
                                <a style="margin-left: 20px"
                                    class="nav-link text-white {{ 'log' == request()->path() ? 'active' : '' }}"
                                    href="{{ '/log' }}">Logs</a>
                            </li>
                            <span class="nav-line"></span>
                            <li class="nav-item">
                                <a style="margin-left: 20px"
                                    class="nav-link text-white {{ 'admin/roles' == request()->path() ? 'active' : '' }}"
                                    href="{{ route('admin.roles.index') }}">Roles</a>
                            </li>
                            <span class="nav-line"></span>
                            <li class="nav-item">
                                <a style="margin-left: 20px"
                                    class="nav-link text-white {{ 'admin/permissions' == request()->path() ? 'active' : '' }}"
                                    href="{{ route('admin.permissions.index') }}">Permissions</a>
                            </li>
                            <li class="nav-item">
                                <a style="margin-left: 20px"
                                    class="nav-link text-white {{ 'admin/users' == request()->path() ? 'active' : '' }}"
                                    href="{{ route('admin.users.index') }}">Users</a>
                            </li>
                            <li class="nav-item">
                                <a style="margin-left: 20px"
                                    class="nav-link text-white {{ 'admin/users' == request()->path() ? 'active' : '' }}"
                                    href="{{ '/my-post' }}">My Talk</a>
                            </li>

                        </div>

                    </div>
                @endrole

        {{-- <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
            aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Employers</span>
        </a> --}}
        {{-- <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Employers:</h6>

                <a class="collapse-item" href="{{ url('/index') }}">Employees</a>
                <a class="collapse-item" href="{{ url('/logs') }}">Logs</a>
            </div>
        </div> --}}
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->

    <!-- Nav Item - Pages Collapse Menu -->
</ul>
