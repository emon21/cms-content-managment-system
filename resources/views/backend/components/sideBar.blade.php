<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('backend') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">{{ $website->site_name }}</span>
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
                <a href="#" class="d-block " style="color:var(--pxa-title-color)" >Alexander Pierce</a>
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
                <li class="nav-item">
                    <a href="{{ route('admin.dashboard') }}"
                        class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">

                        <span class="icon-menu">
                            <x-backend.icon.dashboard-icon name="dashboard" />
                        </span>
                        <span class="menu-text">
                            Dashboard
                        </span>
                    </a>


                </li>


                <li class="nav-item">
                    <a href="{{ route('model-create') }}"
                        class="nav-link d-flex align-items-center {{ request()->routeIs('model-create') ? 'active' : '' }}">

                        <span class="icon-menu">
                            <x-backend.icon.category-icon name="category" />
                        </span>
                        <span class="menu-text">
                            Create Model 
                        </span>
                        {{-- <span class="pl-1">Category ( {{ $categorylist->count() }} ) </span> --}}
                    </a>
                </li> 
                
                
                <li class="nav-item">
                    <a href="{{ route('admin.category') }}"
                        class="nav-link d-flex align-items-center {{ request()->routeIs('admin.category') ? 'active' : '' }}">

                        <span class="icon-menu">
                            <x-backend.icon.category-icon name="category" />
                        </span>
                        <span class="menu-text">
                            Category ( {{ $categorylist->count() }} )
                        </span>
                        {{-- <span class="pl-1">Category ( {{ $categorylist->count() }} ) </span> --}}
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('admin.blog.index') }}"
                        class="nav-link {{ request()->routeIs('admin.blog.index') ? 'active' : '' }}">
                        <span class="icon-menu">
                            <x-backend.icon.blog-icon />
                        </span>
                        <span class="menu-text">
                            Blog
                        </span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('service.index') }}"
                        class="nav-link {{ request()->routeIs('service.index') ? 'active' : '' }}">
                        <span class="icon-menu">
                            <x-backend.icon.service-icon />
                        </span>
                        <span class="menu-text">
                            Service
                        </span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('gallery.index') }}"
                        class="nav-link d-flex align-items-center {{ request()->routeIs('gallery.index') ? 'active' : '' }}">
                        <span class="icon-menu">
                            <x-backend.icon.gallery-icon />
                        </span>
                        <span class="menu-text">
                            Gallery
                        </span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('testimonial.index') }}"
                        class="nav-link d-flex gap-4 align-items-center {{ request()->routeIs('testimonial.index') ? 'active' : '' }}">
                        <span class="icon-menu">
                            <x-backend.icon.testimonial-icon />
                        </span>
                        <span class="menu-text">
                            Testimonial
                        </span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('price-plan.index') }}"
                        class="nav-link {{ request()->routeIs('price-plan.index') ? 'active' : '' }}">
                        <span class="icon-menu">
                            <x-backend.icon.plan-icon />
                        </span>
                        <span class="menu-text">
                            PricePlan
                        </span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('faq.index') }}"
                        class="nav-link d-flex gap-4 align-items-center {{ request()->routeIs('faq.index') ? 'active' : '' }}">
                        <span class="icon-menu">
                            <x-backend.icon.faq-icon />
                        </span>
                        <span class="menu-text">
                            Faq
                        </span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('partner.index') }}"
                        class="nav-link d-flex gap-4 align-items-center {{ request()->routeIs('partner.index') ? 'active' : '' }}">
                        <span class="icon-menu">
                            <x-backend.icon.partner-icon />
                        </span>
                        <span class="menu-text">
                            Partner
                        </span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('team-member.index') }}"
                        class="nav-link d-flex gap-4 align-items-center {{ request()->routeIs('team-member.index') ? 'active' : '' }}">
                        <span class="icon-menu">
                            <x-backend.icon.team-icon />
                        </span>
                        <span class="menu-text">
                            Our Team
                        </span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('contact.index') }}"
                        class="nav-link {{ request()->routeIs('contact.index') ? 'active' : '' }}">
                        <span class="icon-menu">
                            <x-backend.icon.contact-icon />
                        </span>
                        <span class="menu-text">
                            Contact US
                        </span>
                    </a>
                </li>
                <li class="nav-item menu-is-opening {{ request()->routeIs('setting') ? 'menu-open' : '' }} ">
                    <a href="#" class="nav-link">
                        {{-- <i class="nav-icon fas fa-chart-pie"></i> --}}
                        {{-- <p>
                            Setting
                            <i class="right fas fa-angle-right"></i>
                        </p> --}}
                        <span class="icon-menu">
                            <x-backend.icon.setting-icon />
                        </span>
                        <span class="menu-text">
                            Setting
                        </span>
                        <i class="right fas fa-angle-right"></i>

                    </a>

                    <ul class="nav nav-treeview">

                        <li class="nav-item">
                            <a href="{{ route('setting.website') }}"
                                class="nav-link {{ request()->routeIs('setting.website') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Website</p>
                            </a>
                        </li>

                        {{-- <li class="nav-item">
                            <a href="{{ route('setting.color') }}" class="nav-link {{ request()->routeIs('setting.color') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Color Setting</p>
                            </a>
                        </li> --}}

                        {{-- <li class="nav-item">
                            <a href="{{ route('setting.mail-setting') }}" class="nav-link {{ request()->routeIs('setting.mail-setting') ? 'active' : '' }}">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Mail Setting</p>
                            </a>
                        </li> --}}

                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
