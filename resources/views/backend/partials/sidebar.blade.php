<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('backend/adminlte/dist/img/avatar5.png') }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                {{ Auth::user()->email }}
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
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active">
                <a href="{{ url('/admin') }}">
                    <i class="fa fa-dashboard"></i> <span>{{ trans('backend/master.dashboard') }}</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-clipboard"></i> <span>{{ trans('backend/categories.control') }}</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('categories.index') }}"><i class="fa fa-circle-o"></i> {{ trans('backend/categories.all') }}</a></li>
                    <li><a href="{{ route('category.create') }}"><i class="fa fa-circle-o"></i>{{ trans('backend/categories.create') }}</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-windows"></i> <span>{{ trans('backend/programs.control') }}</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('programs.index') }}"><i class="fa fa-circle-o"></i> {{ trans('backend/programs.all') }}</a></li>
                    <li><a href="{{ route('program.create') }}"><i class="fa fa-circle-o"></i> {{ trans('backend/programs.create') }}</a></li>
                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>