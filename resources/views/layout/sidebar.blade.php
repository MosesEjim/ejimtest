
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
        <li><a href="{{route('dashboard.user.index')}}"><i class="zmdi zmdi-dot-circle-alt"></i> User List</a></li>
        <li><a href=""><i class="zmdi zmdi-dot-circle-alt"></i> Create a User</a></li>
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
    <li>
      <a href="javaScript:void();" class="waves-effect">
        <i class="zmdi zmdi-chart"></i> <span>Products</span>
        <i class="fa fa-angle-left float-right"></i>
      </a>
      <ul class="sidebar-submenu">
        <li><a href="{{ route('dashboard.product.index') }}"><i class="zmdi zmdi-dot-circle-alt"></i> All Products</a></li>
        <li><a href="{{ route('dashboard.product.create') }}"><i class="zmdi zmdi-dot-circle-alt"></i> Create a Product</a></li>
      </ul>
    </li>
    <li>
      <a href="javaScript:void();" class="waves-effect">
        <i class="zmdi zmdi-chart"></i> <span>Stocks</span>
        <i class="fa fa-angle-left float-right"></i>
      </a>
      <ul class="sidebar-submenu">
        <li><a href="{{ route('dashboard.stock.index') }}"><i class="zmdi zmdi-dot-circle-alt"></i> All Stocks</a></li>
        <li><a href="{{ route('dashboard.stock.create') }}"><i class="zmdi zmdi-dot-circle-alt"></i> Create a Stock</a></li>
      </ul>
    </li>
    <li>
      <a href="javaScript:void();" class="waves-effect">
        <i class="zmdi zmdi-chart"></i> <span>Partners</span>
        <i class="fa fa-angle-left float-right"></i>
      </a>
      <ul class="sidebar-submenu">
        <li><a href="{{ route('dashboard.partner.index') }}"><i class="zmdi zmdi-dot-circle-alt"></i> All Partners</a></li>
        <li><a href="{{ route('dashboard.partner.create') }}"><i class="zmdi zmdi-dot-circle-alt"></i> Add a Partner</a></li>
      </ul>
    </li>
    <li>
      <a href="javaScript:void();" class="waves-effect">
        <i class="zmdi zmdi-chart"></i> <span>Vendors</span>
        <i class="fa fa-angle-left float-right"></i>
      </a>
      <ul class="sidebar-submenu">
        <li><a href="{{ route('dashboard.vendor.index') }}"><i class="zmdi zmdi-dot-circle-alt"></i> All Vendors</a></li>
        <li><a href="{{ route('dashboard.vendor.create') }}"><i class="zmdi zmdi-dot-circle-alt"></i> Add a Vendor</a></li>
      </ul>
    </li>
    <li>
      <a href="javaScript:void();" class="waves-effect">
        <i class="zmdi zmdi-chart"></i> <span>Transactions</span>
        <i class="fa fa-angle-left float-right"></i>
      </a>
      <ul class="sidebar-submenu">
        <li><a href="{{ route('dashboard.transaction.index') }}"><i class="zmdi zmdi-dot-circle-alt"></i> All Transactions</a></li>
        <li><a href="{{ route('dashboard.transaction.create') }}"><i class="zmdi zmdi-dot-circle-alt"></i> Add a Transaction</a></li>
      </ul>
    </li>

    <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="fa fa-gear"></i> <span>EUM</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
          
          <li>
            <a href="javaScript:void();"><i class="zmdi zmdi-dot-circle-alt"></i> Programs <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="sidebar-submenu">
              <li><a href="{{ route('dashboard.eum.program.create') }}"><i class="zmdi zmdi-dot-circle-alt"></i> Create a Program</a></li>
              <li><a href="{{ route('dashboard.eum.program.index') }}"><i class="zmdi zmdi-dot-circle-alt"></i> All Programs</a></li>
              </li>
            </ul>
          </li>
          
          <li>
            <a href="javaScript:void();"><i class="zmdi zmdi-dot-circle-alt"></i> Sub Programs <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="sidebar-submenu">
              <li><a href="{{ route('dashboard.eum.subprogram.create') }}"><i class="zmdi zmdi-dot-circle-alt"></i> Create Sub Program</a></li>
              <li><a href="{{ route('dashboard.eum.subprogram.index') }}"><i class="zmdi zmdi-dot-circle-alt"></i> All Sub Programs</a></li>
              </li>
            </ul>
          </li>

          <li>
            <a href="javaScript:void();"><i class="zmdi zmdi-dot-circle-alt"></i> Survey type <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="sidebar-submenu">
              <li><a href="{{ route('dashboard.eum.surveytype.create') }}"><i class="zmdi zmdi-dot-circle-alt"></i> Create Survey type</a></li>
              <li><a href="{{ route('dashboard.eum.surveytype.index') }}"><i class="zmdi zmdi-dot-circle-alt"></i> All Survey types</a></li>
              </li>
            </ul>
          </li>

          
          
        </ul>
    </li>

    <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="fa fa-gear"></i> <span>Settings</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
          
          <li>
            <a href="javaScript:void();"><i class="zmdi zmdi-dot-circle-alt"></i> States <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="sidebar-submenu">
              <li><a href="{{ route('dashboard.state.create') }}"><i class="zmdi zmdi-dot-circle-alt"></i> Create a State</a></li>
              <li><a href="{{ route('dashboard.state.index') }}"><i class="zmdi zmdi-dot-circle-alt"></i> All States</a></li>
              </li>
            </ul>
          </li>
          
          <li>
            <a href="javaScript:void();"><i class="zmdi zmdi-dot-circle-alt"></i> LGAs <i class="fa fa-angle-left pull-right"></i></a>
            <ul class="sidebar-submenu">
              <li><a href="{{ route('dashboard.lga.create') }}"><i class="zmdi zmdi-dot-circle-alt"></i> Create an LGA</a></li>
              <li><a href="{{ route('dashboard.lga.index') }}"><i class="zmdi zmdi-dot-circle-alt"></i> All LGAs</a></li>
              </li>
            </ul>
          </li>

          
          
        </ul>
    </li>
    
  </ul>