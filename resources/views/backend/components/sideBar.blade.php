<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('backend') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('backend') }}/dist/img/user2-160x160.jpg" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        {{-- {{ request()->is('admin.dashboard') ? 'active' : '' }} --}}

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="{{ route('admin.dashboard') }}"
                        class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        Dashboard
                    </a>

                </li>

                <li class="nav-item">
                    <a href="pages/widgets.html" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Widgets
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('category') }}"
                        class="nav-link {{ request()->routeIs('category') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-list"></i>
                        Category
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('blog.index') }}"
                        class="nav-link {{ request()->routeIs('blog.index') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-list"></i>
                        Blog
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('price-plan.index') }}"
                        class="nav-link {{ request()->routeIs('price-plan.index') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-list"></i>
                        PricePlan
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('service.index') }}"
                        class="nav-link {{ request()->routeIs('service.index') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-list"></i>
                        Service
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('faq.index') }}"
                        class="nav-link {{ request()->routeIs('faq.index') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-list"></i>
                        Faq
                    </a>
                </li>


                <li class="nav-item">
                    <a href="{{ route('testimonial.index') }}"
                        class="nav-link {{ request()->routeIs('testimonial.index') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-list"></i>
                        Testimonial
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('partner.index') }}"
                        class="nav-link {{ request()->routeIs('partner.index') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-list"></i>
                        Partner
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('team-member.index') }}"
                        class="nav-link {{ request()->routeIs('team-member.index') ? 'active' : '' }}">
                        <i class="nav-icon fas fa-list"></i>
                        Team Member
                    </a>
                </li>

                <li class="nav-header">LABELS</li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-circle text-danger"></i>
                        <p class="text">Important</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-circle text-warning"></i>
                        <p>Warning</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-circle text-info"></i>
                        <p>Informational</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
