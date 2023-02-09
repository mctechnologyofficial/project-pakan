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
                <a class="nav-link collapsed" href="{{ route('user-list') }}">
                    <i class="bi bi-person"></i><span>Users</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('superadmin.proofpayment.index') }}">
                    <i class="bi bi-list-check"></i><span>Proof of Payment</span>
                </a>
            </li>
        @endrole

        @role('Admin')
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('report-list') }}">
                    <i class="bi bi-person"></i><span>Report</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="">
                    <i class="bi bi-list-check"></i><span>Proof of Payment</span>
                </a>
            </li>
        @endrole

    </ul>

</aside>
