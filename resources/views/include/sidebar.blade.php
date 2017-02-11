 <!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="{{ asset('admin_template/dist/img/avatar3.png')}}" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p>Admin</p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
            <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">MAIN NAVIGATION</li>
    
          <li class="active"><a href="/admin/dashboard"><i class="fa fa-circle-o"></i> Dashboard</a></li>
      @if(Auth::user()->hasRole('Admin'))
      <li class="treeview">
        <a href="#">
          <i class="fa fa-pie-chart"></i>
          <span>Access Control</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ url('/user/create') }}"><i class="fa fa-circle-o"></i> User</a></li>
          <li><a href="/role/create"><i class="fa fa-circle-o"></i> Role</a></li>
          <li><a href="/permission/create"><i class="fa fa-circle-o"></i> Permission</a></li>
        </ul>
      </li>
      @endif


      <li class="treeview ">
        <a href="#">
          <i class="fa fa-laptop"></i>
          <span>Registration</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="/admin/pending_registration"><i class="fa fa-circle-o"></i>Pending</a></li>
          <li><a href="#"><i class="fa fa-circle-o"></i>Completed</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-edit"></i> <span>Identification</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="#"><i class="fa fa-circle-o"></i> Print ID</a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="#">
          <i class="fa fa-table"></i> <span>Profile Management</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="#"><i class="fa fa-circle-o"></i> Edit Profile</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class="fa fa-envelope"></i> <span>Notification</span>
        </a>
      </li>
      <li>
          <a href="{{ url('/logout') }}"
              onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
            <i class="fa fa-book"></i> <span>
              Logout
          </a>

          <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
          </form>
      </li>

    </ul>
  </section>
  <!-- /.sidebar -->
</aside>