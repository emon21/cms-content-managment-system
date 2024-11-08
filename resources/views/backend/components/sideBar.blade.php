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
                        {{-- <i class="nav-icon fas fa-tachometer-alt"></i> --}}
                        <img width="25" height="25" src="https://img.icons8.com/ios/25/FA5252/control-panel--v2.png" alt="control-panel--v2"/>
                        Dashboard
                    </a>

                </li>

 
                <li class="nav-item">
                    <a href="{{ route('category') }}"
                        class="nav-link d-flex align-items-center {{ request()->routeIs('category') ? 'active' : '' }}">
                        {{-- <i class="nav-icon fas fa-list"></i> --}}
                        {{-- <x-icon name="category"></x-icon> --}}
                        {{-- <x-category title="category"/> --}}
                        {{-- <x-icon/> --}}


                        {{-- @include('backend.components.icon.category') --}}

                        <ion-icon class="nav-icon" name="grid-outline"></ion-icon>
                        Category ( {{ $categorylist->count() }} )
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('blog.index') }}"
                        class="nav-link {{ request()->routeIs('blog.index') ? 'active' : '' }}">
                        {{-- <ion-icon class="nav-icon" name="grid-outline"></ion-icon> --}}
                        <img width="25" height="25" src="https://img.icons8.com/ios/25/FA5252/blogger.png" alt="blogger"/>
                        Blog
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('service.index') }}"
                        class="nav-link {{ request()->routeIs('service.index') ? 'active' : '' }}">
                        {{-- <i class="nav-icon fas fa-list"></i> --}}
                        <img  src="https://img.icons8.com/ios/25/FA5252/service--v1.png" alt="service--v1"/>
                        Service
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('gallery.index') }}"
                        class="nav-link d-flex align-items-center {{ request()->routeIs('gallery.index') ? 'active' : '' }}">
                        {{-- <i class="nav-icon fas fa-list"></i> --}}
                        <ion-icon class="nav-icon" name="image-outline"></ion-icon>
                        Gallery
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('testimonial.index') }}"
                        class="nav-link d-flex gap-4 align-items-center {{ request()->routeIs('testimonial.index') ? 'active' : '' }}">
                        <ion-icon class="nav-icon" name="grid-outline"></ion-icon>
                        Testimonial
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('price-plan.index') }}"
                        class="nav-link {{ request()->routeIs('price-plan.index') ? 'active' : '' }}">
                        {{-- <ion-icon class="nav-icon" name="grid-outline"></ion-icon> --}}
                        <img width="25" height="25" src="https://img.icons8.com/ios/25/FA5252/price-tag-usd--v1.png" alt="price-tag-usd--v1"/>
                        PricePlan
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('faq.index') }}"
                        class="nav-link d-flex gap-4 align-items-center {{ request()->routeIs('faq.index') ? 'active' : '' }}">
                        <ion-icon class="nav-icon" name="grid-outline"></ion-icon>
                        Faq
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('partner.index') }}"
                        class="nav-link d-flex gap-4 align-items-center {{ request()->routeIs('partner.index') ? 'active' : '' }}">
                        <ion-icon class="nav-icon" name="grid-outline"></ion-icon>
                        {{-- <img width="25" height="25" src="https://img.icons8.com/ios/25/FA5252/handshake--v1.png" alt="handshake--v1"/> --}}
                        Partner
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ route('team-member.index') }}"
                        class="nav-link d-flex gap-4 align-items-center {{ request()->routeIs('team-member.index') ? 'active' : '' }}">
                        {{-- <ion-icon class="nav-icon" name="logo-microsoft"></ion-icon> --}}
                        <i class="fas fa-users pr-1 fa-fw text-success"></i>
                       
                        Team Member
                    </a>
                </li>

                

                <li class="nav-item">
                    <a href="{{ route('contact.index') }}"
                        class="nav-link {{ request()->routeIs('contact.index') ? 'active' : '' }}">
                        {{-- <img src="https://icons8.com/icon/5471/faq" alt=""> --}}
                        {{-- <i class="fas fa-question pr-1 fa-fw text-success"></i> --}}
                        {{-- <i class="fas fa-phone pr-1"></i> --}}
                        <svg class="pr-1" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_121_56)">
                                <path d="M18.9676 14.8671C18.4762 14.3555 17.8836 14.082 17.2555 14.082C16.6324 14.082 16.0347 14.3505 15.5231 14.8621L13.9225 16.4577C13.7908 16.3867 13.6591 16.3209 13.5324 16.2551C13.3501 16.1639 13.1779 16.0778 13.031 15.9866C11.5316 15.0343 10.169 13.7933 8.86216 12.1876C8.22899 11.3872 7.8035 10.7135 7.49452 10.0297C7.90988 9.64981 8.29484 9.25472 8.66968 8.87481C8.81151 8.73298 8.95334 8.58609 9.09517 8.44426C10.1589 7.38053 10.1589 6.00275 9.09517 4.93903L7.71233 3.55618C7.5553 3.39915 7.39321 3.23706 7.24125 3.07497C6.93733 2.76092 6.61821 2.43673 6.28896 2.13281C5.79762 1.64654 5.21004 1.3882 4.59206 1.3882C3.97409 1.3882 3.37637 1.64654 2.86984 2.13281L2.85971 2.14294L1.13748 3.88036C0.489117 4.52873 0.119345 5.31893 0.0382993 6.23576C-0.0832695 7.71485 0.352352 9.09262 0.686666 9.99426C1.50725 12.2078 2.73307 14.2593 4.56167 16.4577C6.7803 19.1069 9.44975 21.1988 12.4991 22.6729C13.6641 23.225 15.2192 23.8784 16.9566 23.9899C17.063 23.9949 17.1744 24 17.2757 24C18.4458 24 19.4285 23.5796 20.1985 22.7438C20.2035 22.7337 20.2136 22.7286 20.2187 22.7185C20.4821 22.3993 20.786 22.1106 21.1052 21.8016C21.323 21.5939 21.5458 21.3761 21.7636 21.1482C22.2651 20.6265 22.5285 20.0186 22.5285 19.3956C22.5285 18.7675 22.2601 18.1647 21.7485 17.6582L18.9676 14.8671ZM20.781 20.201C20.7759 20.206 20.7759 20.201 20.781 20.201C20.5834 20.4137 20.3808 20.6062 20.163 20.8189C19.8337 21.133 19.4994 21.4622 19.1854 21.832C18.6738 22.3791 18.071 22.6374 17.2808 22.6374C17.2048 22.6374 17.1238 22.6374 17.0478 22.6323C15.5434 22.5361 14.1453 21.9485 13.0968 21.447C10.2298 20.0591 7.71233 18.0887 5.62033 15.5915C3.89304 13.5096 2.73814 11.5848 1.97327 9.51812C1.50219 8.25684 1.32997 7.27416 1.40595 6.3472C1.4566 5.75455 1.68454 5.26321 2.10497 4.84278L3.83226 3.11549C4.08046 2.88249 4.34386 2.75585 4.60219 2.75585C4.92131 2.75585 5.17964 2.94834 5.34174 3.11043L5.35693 3.12562C5.66592 3.41435 5.95971 3.71321 6.2687 4.03233C6.42572 4.19442 6.58782 4.35651 6.74991 4.52367L8.13275 5.90651C8.66968 6.44344 8.66968 6.93984 8.13275 7.47677C7.98586 7.62367 7.84403 7.77056 7.69713 7.91239C7.27164 8.34802 6.86641 8.75325 6.42572 9.14834C6.41559 9.15847 6.40546 9.16354 6.4004 9.17367C5.96478 9.60929 6.04582 10.0348 6.137 10.3235L6.15219 10.3691C6.51184 11.2403 7.01837 12.0609 7.78831 13.0385L7.79337 13.0436C9.19141 14.7658 10.6654 16.1082 12.2914 17.1364C12.4991 17.2681 12.7118 17.3745 12.9145 17.4758C13.0968 17.567 13.269 17.6531 13.4159 17.7443C13.4362 17.7544 13.4564 17.7696 13.4767 17.7797C13.6489 17.8658 13.811 17.9064 13.9782 17.9064C14.3986 17.9064 14.662 17.643 14.7481 17.5568L16.4805 15.8245C16.6527 15.6523 16.9262 15.4446 17.2453 15.4446C17.5594 15.4446 17.8177 15.6421 17.9748 15.8144L17.9849 15.8245L20.7759 18.6155C21.2976 19.1322 21.2976 19.664 20.781 20.201ZM12.9702 5.70896C14.2973 5.93184 15.5029 6.55994 16.4653 7.52236C17.4277 8.48478 18.0507 9.69034 18.2787 11.0175C18.3344 11.3518 18.6231 11.5848 18.9524 11.5848C18.9929 11.5848 19.0284 11.5797 19.0689 11.5747C19.4437 11.5139 19.6919 11.1593 19.6311 10.7845C19.3576 9.17874 18.5978 7.71485 17.4378 6.55488C16.2779 5.39491 14.814 4.6351 13.2082 4.36157C12.8334 4.30079 12.4839 4.54899 12.4181 4.91876C12.3522 5.28854 12.5953 5.64818 12.9702 5.70896ZM23.9721 10.5869C23.5213 7.94279 22.2752 5.53674 20.3605 3.62203C18.4458 1.70732 16.0398 0.461243 13.3957 0.0104253C13.0259 -0.0554245 12.6764 0.197844 12.6105 0.567615C12.5497 0.942452 12.798 1.29196 13.1728 1.35781C15.5332 1.75798 17.686 2.87742 19.3981 4.58445C21.1102 6.29654 22.2246 8.44932 22.6248 10.8098C22.6805 11.1441 22.9692 11.3771 23.2985 11.3771C23.339 11.3771 23.3744 11.372 23.415 11.367C23.7847 11.3113 24.038 10.9567 23.9721 10.5869Z" fill="white"></path>
                            </g>
                            <defs>
                                <clipPath id="clip0_121_56">
                                    <rect width="24" height="24" fill="white"></rect>
                                </clipPath>
                            </defs>
                        </svg>
                        Contact US
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
