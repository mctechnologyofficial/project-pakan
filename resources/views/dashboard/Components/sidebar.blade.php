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
                <a class="nav-link collapsed" href="{{ route('user.index') }}">
                    <i class="bi bi-person"></i><span>Users</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('proofpayment.index') }}">
                    <i class="bi bi-list-check"></i><span>Proof of Payment</span>
                </a>
            </li>
        @endrole

        @role('Admin')
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('report.index') }}">
                    <i class="bi bi-file-bar-graph"></i><span>Report</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('report.show') }}">
                    <i class="bi bi-clock-history"></i><span>History</span>
                </a>
            </li>
        @endrole

    </ul>

</aside>
