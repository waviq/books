<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->

        <!-- search form -->

        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>

            <li class="treeview">
                <a href="{{url(action('HomeController@index'))}}">
                    <i class="fa fa-users"></i>
                    <span>Home</span>
                </a>

            </li>
            @role('super_admin')
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i>
                    <span>Users</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url(action('UserController@create'))}}"><i class="fa fa-user"></i>Create User</a>
                    </li>
                    <li><a href="{{url(action('UserController@index'))}}"><i class="fa fa-eye"></i>All User</a></li>
                </ul>
            </li>
            @endrole
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-book"></i>
                    <span>Books</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{url(action('BookController@create'))}}"><i class="fa fa-plus"></i>Create Book</a>
                    </li>
                    @permission('crud_book')
                    <li><a href="{{url(action('BookController@index'))}}"><i class="fa fa-eye"></i>All Books</a></li>
                    @endpermission
                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>