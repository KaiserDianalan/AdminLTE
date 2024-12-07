<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Assessor</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel d-flex mb-3 mt-3 pb-3">
            <div class="image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Jerf Leo Carpio</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <!-- Main Navigation Section -->
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Search -->
                <li class="nav-item">
                    <a href="{{ route('search') }}" class="nav-link active">
                        <i class="nav-icon fas fa-search fa-fw"></i>
                        <p>Search</p>
                    </a>
                </li>

                <!-- Transaction Dashboard -->
                <li class="nav-item">
                    <a href="{{ route('transaction') }}" class="nav-link">
                        <i class="nav-icon fas fa-chart-line"></i>
                        <p>Transaction Dashboard</p>
                    </a>
                </li>

                <!-- PIN -->
                <li class="nav-item">
                    <a href="{{ route('pin') }}" class="nav-link">
                        <i class="nav-icon fas fa-key"></i>
                        <p>PIN</p>
                    </a>
                </li>

                <!-- Tracking -->
                <li class="nav-item">
                    <a href="#" class="nav-link" data-toggle="modal" data-target="#trackingModal">
                        <i class="nav-icon fas fa-map-marker-alt"></i>
                        <p>Tracking</p>
                    </a>
                </li>

                <!-- Report -->
                <li class="nav-item">
                    <a href="#" class="nav-link" data-toggle="modal" data-target="#reportModal">
                        <i class="nav-icon fas fa-file-alt"></i>
                        <p>Report</p>
                    </a>
                </li>

                <!-- Printing -->
                <li class="nav-item">
                    <a href="#" class="nav-link" data-toggle="modal" data-target="#printingModal">
                        <i class="nav-icon fas fa-print"></i>
                        <p>Printing</p>
                    </a>
                </li>

                <!-- Validation -->
                <li class="nav-item">
                    <a href="pages/widgets.html" class="nav-link">
                        <i class="nav-icon fas fa-check-circle"></i>
                        <p>Validation</p>
                    </a>
                </li>

                <!-- Messages -->
                <li class="nav-item">
                    <a href="pages/widgets.html" class="nav-link">
                        <i class="nav-icon fas fa-envelope"></i>
                        <p>Messages</p>
                    </a>
                </li>
            </ul>

            <!-- Divider -->
            <hr class="mt-4 mb-3">

            <!-- Administrator Menu Section -->
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-header">Administrator Menu</li> <!-- Header -->

                 <!-- Edit Account Info -->
                 <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user-shield"></i>
                        <p>Administrator Menu</p>
                    </a>
                </li>

                <!-- Edit Account Info -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-user-edit"></i>
                        <p>Edit Account Info</p>
                    </a>
                </li>

                <!-- Change Password -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-key"></i>
                        <p>Change Password</p>
                    </a>
                </li>

                <!-- Logout -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
