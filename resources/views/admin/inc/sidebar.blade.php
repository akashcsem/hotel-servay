<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li>
            <a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard </a>
            </li>
            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Categories <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('admin.categories.create') }}"> Category Create </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.categories.index') }}">Category List</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Designations <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('admin.designations.create') }}"> Designation Create </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.designations.index') }}"> Designaion List </a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Employees <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('admin.employees.create') }}"> Employee Create </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.employees.index') }}"> Employee List </a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Rooms <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ route('admin.rooms.create') }}"> Room Create </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.rooms.index') }}"> Room List</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            
        </ul>
    </div>
</div>