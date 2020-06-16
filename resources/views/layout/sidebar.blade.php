
  <ul class="sidebar-menu">
    <li class="sidebar-header">MAIN NAVIGATION</li>
    <li>
      <a href="javaScript:void();" class="waves-effect">
        <i class="zmdi zmdi-view-dashboard"></i> <span>Dashboard</span></i>
      </a>
    </li>
    <li>
      <a href="javaScript:void();" class="waves-effect">
        <i class="zmdi zmdi-layers"></i>
        <span>Users</span> <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="sidebar-submenu">
        <li><a href="ui-typography.html"><i class="zmdi zmdi-dot-circle-alt"></i> User List</a></li>
        <li><a href="ui-cards.html"><i class="zmdi zmdi-dot-circle-alt"></i> Create a User</a></li>
      </ul>
    </li>
    <li>
      <a href="javaScript:void();" class="waves-effect">
        <i class="zmdi zmdi-card-travel"></i>
        <span>User Roles</span>
        <i class="fa fa-angle-left pull-right"></i>
      </a>
      <ul class="sidebar-submenu">
        <li><a href="{{route('roles')}}"><i class="zmdi zmdi-dot-circle-alt"></i> All Roles</a></li>
        <li><a href="{{route('createroles')}}"><i class="zmdi zmdi-dot-circle-alt"></i> Create Roles</a></li>
      </ul>
    </li>
    <li>
      <a href="javaScript:void();" class="waves-effect">
        <i class="zmdi zmdi-chart"></i> <span>Categories</span>
        <i class="fa fa-angle-left float-right"></i>
      </a>
      <ul class="sidebar-submenu">
        <li><a href="{{ route('dashboard.category.index') }}"><i class="zmdi zmdi-dot-circle-alt"></i> All Categories</a></li>
        <li><a href="{{ route('dashboard.category.create') }}"><i class="zmdi zmdi-dot-circle-alt"></i> Create a Category</a></li>
        <li><a href="{{ route('dashboard.category.disabled') }}"><i class="zmdi zmdi-dot-circle-alt"></i> Disabled Categories</a></li>
      </ul>
    </li>
    
  </ul>