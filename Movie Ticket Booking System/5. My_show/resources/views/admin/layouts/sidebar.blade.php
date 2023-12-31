<aside class="main-sidebar sidebar-dark-primary elevation-4 " id="offcanvas">

        <span class="brand-text font-weight-light" style="color:white; font-size: 25px;font-weight: bold; margin: 10px;">My Show</span>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">

                <img src="{{ asset('admin/dist/img/My_show.png') }}" class="img-circle" alt="User Image">
            </div>
            <div class="info">
                <a href="{{ route('post') }}" class="d-block" style="font-weight: bold;font-size: 15px">My Show</a>
            </div>

        </div>

        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="header" style="font-size: 20px;color: #cccccc;">DASHBOARD</li>
                <li class="nav-item menu-open">
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('movies-details')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p style="color:#01a252;font-size: 20px">Movie Details</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('actor-details')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p style="color:#01a252;font-size: 20px">Actor Details</p>
                            </a>
                        </li>

                          <li class="nav-item">
                            <a href="{{route('theatres-details')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p style="color:#01a252;font-size: 20px">Theater</p>
                            </a>
                        </li>
                    </ul>
                </li>


            </ul>
        </nav>

    </div>
    <!-- /.sidebar -->
</aside>
