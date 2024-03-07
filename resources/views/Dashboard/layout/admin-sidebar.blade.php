 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('dashboard/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('dashboard/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               {{-- admin:1 --}}
        @if(Auth::user()->user_type == 1)
        <li class="nav-item">
          <a href="/admin" class="nav-link @if(Request::segment(1) == 'admin') active
          @endif">
            <i class="nav-icon fas fa-th"></i>
            <p>
              My Dashboared
              <span class="right badge badge-danger">New</span>
            </p>
          </a>
        </li>

        {{-- <li class="nav-item menu-open"> --}}
          <li class="nav-item {{ Request::segment(1) == 'user' ? 'menu-open' : '' }} ">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Users
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('user') }}" class="nav-link {{ Request::segment(1) == 'user'? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>Manage User</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/admin" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Teacher</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/admin" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Revenue</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-header">School Contents</li>
        <!-- <li class="nav-item {{ Request::segment(1) == 'Posts' || 'Post/Create' || '' ? 'menu-open' : '' }} "> -->
          <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Manage Post
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{ route('show.posts') }}" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Post</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('postCategory') }}" class=" nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Post Category</p>
              </a>
            </li>
            {{-- <li class="nav-item">
              <a href="/admin" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Revenue</p>
              </a>
            </li> --}}
          </ul>
        </li>
       <!--  <li class="nav-item {{ Request::segment(1) == 'Posts' || 'Post/Create' || '' ? 'menu-open' : '' }} "> -->
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Events
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              {{-- <a href="{{ route('show.posts') }}" class="nav-link {{ Request::segment(1) == 'Posts' || 'Post/Create' ? '' : '' }}"> --}}
                <a href="{{ route('all.events') }}" class="nav-link">

                <i class="far fa-circle nav-icon"></i>
                <p>Events & Categories</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-calendar-alt"></i>
            <p>
              Notices
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              {{-- <a href="{{ route('show.posts') }}" class="nav-link {{ Request::segment(1) == 'Posts' || 'Post/Create' ? '' : '' }}"> --}}
                <a href="{{ route('all.notices') }}" class="nav-link">

                <i class="far fa-circle nav-icon"></i>
                <p>School Notices</p>
              </a>
            </li>
          </ul>
        </li>


        <li class="nav-header">Social Profile</li>
        <li class="nav-item">
          <a href="{{ route('school.profile') }}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              MPSBS Profile
              <span class="right badge badge-danger">New</span>
            </p>
          </a>
        </li>
        <li class="nav-item">
            <a href="{{ route('gallery.category') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                MPSBS Gallery
                {{-- <span class="right badge badge-danger">New</span> --}}
              </p>
            </a>
          </li>
        <li class="nav-item">
          <a href="{{ route('mpsbs.archive') }}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              MPSBS Archive
              {{-- <span class="right badge badge-danger">New</span> --}}
            </p>
          </a>
        </li>

        <li class="nav-item">
            <a href="{{ route('message') }}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Messages
                {{-- <span class="right badge badge-danger">New</span> --}}
              </p>
            </a>
          </li>


        <li class="nav-header">Social Clubs and Teams</li>
        <li class="nav-item">
          <a href="" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              MPSBS Clubs
              <span class="right badge badge-danger">New</span>
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('all.teams') }}" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Team Members
              <span class="right badge badge-danger">New</span>
            </p>
          </a>
        </li>

        {{-- <li class="nav-item">
          <a href="/Blogs" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              Blog
              <span class="right badge badge-danger">New</span>
            </p>
          </a>
        </li> --}}

        {{-- teacher:2 --}}
        @elseif(Auth::user()->user_type == 2)
        <li class="nav-item">
          <a href="/teacher" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              My Dashboared
              <span class="right badge badge-danger">New</span>
            </p>
          </a>
        </li>
        {{-- student:3 --}}
        @elseif(Auth::user()->user_type == 3)
        <li class="nav-item">
          <a href="/student" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              My Dashboared
              <span class="right badge badge-danger">New</span>
            </p>
          </a>
        </li>
        {{-- parent:4 --}}
        @elseif(Auth::user()->user_type == 4)
        <li class="nav-item">
          <a href="/student" class="nav-link">
            <i class="nav-icon fas fa-th"></i>
            <p>
              My Dashboared
              <span class="right badge badge-danger">New</span>
            </p>
          </a>
        </li>
        @endif
        <li class="nav-header">Logout</li>
        <li class="nav-item">
          <a href="{{ route('logout') }}" class="nav-link">
            <i class="nav-icon fas fa-calendar-alt"></i>
            <p>
              Logout
              <span class="badge badge-info right">2</span>
            </p>
          </a>
        </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
