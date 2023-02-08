<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('dashboard.index') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        @role('Super Admin')
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('superadmin.user.index') }}">
                    <i class="bi bi-person"></i><span>Users</span>
                </a>
            </li>
        @endrole

    </ul>

</aside>
