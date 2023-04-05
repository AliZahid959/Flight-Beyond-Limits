<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{route('home')}}" class="app-brand-link">
            <span class="app-brand-logo demo">

            </span>
            <span class="app-brand-text h3">IBN FIRNAS</span>
        </a>
        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>
    <div class="menu-inner-shadow"></div>
    <ul class="menu-inner py-1">
        <li class="menu-item {{Route::is('home') ? 'active' : ''}}">
            <a href="{{route('home')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>
        <li class="menu-item {{Route::is('setting.about') ? 'active' : ''}}">
            <a href="{{route('setting.about')}}" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-wrench"></i>
                <div data-i18n="Analytics">About Page Manager</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bxs-box"></i>
                <div data-i18n="Product">Home Page Manager</div>
            </a>

            <ul class="menu-sub">
            <li class="menu-item">
                    @can('crud-home-slider')
                <li class="menu-item">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <div data-i18n="Layouts">Slider Section</div>
                    </a>

                    <ul class="menu-sub">
                        <li class="menu-item {{Route::is('home-slider.create') ? 'active' : ''}}">
                            <a href="{{route('home-slider.create')}}" class="menu-link">
                                <div data-i18n="Without menu">Add New Slide</div>
                            </a>
                        </li>
                        <li class="menu-item {{Route::is('home-slider.index') ? 'active' : ''}}">
                            <a href="{{route('home-slider.index')}}" class="menu-link">
                                <div data-i18n="Without navbar">View All Slides</div>
                            </a>
                        </li>
                    </ul>
                </li>
                @endcan
        </li>

                @can('product-setting')
                <li class="menu-item">
                    <a href="{{route('setting.product.index')}}" class="menu-link">
                        <div data-i18n="Without navbar">Manage Product Section</div>
                    </a>
                </li>
                @endcan
                @can('blog-setting')
                <li class="menu-item">
                    <a href="{{route('setting.blog.index')}}" class="menu-link">
                        <div data-i18n="Without navbar">Manage Blog Section</div>
                    </a>
                </li>
                @endcan
                @can('service-setting')
                <li class="menu-item">
                    <a href="{{route('setting.service.index')}}" class="menu-link">
                        <div data-i18n="Without navbar">Manage Service Section</div>
                    </a>
                </li>
                @endcan
                @can('team-setting')
                <li class="menu-item">
                    <a href="{{route('setting.team.index')}}" class="menu-link">
                        <div data-i18n="Without navbar">Manage Team Section</div>
                    </a>
                </li>
                @endcan

    </ul>
    </li>

    @can('read-blog')
    <li class="menu-item {{Route::is('blog.*') ? 'active open' : ''}}">

        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bxs-file-doc"></i>
            <div data-i18n="Layouts">Blogs</div>
        </a>

        <ul class="menu-sub">
            @can('create-blog')
            <li class="menu-item {{Route::is('blog.create') ? 'active' : ''}}">
                <a href="{{route('blog.create')}}" class="menu-link">
                    <div data-i18n="Without menu">Add New Blog</div>
                </a>
            </li>
            @endcan
            <li class="menu-item {{Route::is('blog.index') ? 'active' : ''}}">
                <a href="{{route('blog.index')}}" class="menu-link">
                    <div data-i18n="Without navbar">View All Blogs</div>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{route('blog-category.create')}}" class="menu-link">
                    <div data-i18n="Without menu">Add Category</div>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{route('blog-category.index')}}" class="menu-link">
                    <div data-i18n="Without menu">View All Categories</div>
                </a>
            </li>

        </ul>
    </li>
    @endcan
        @can('read-product')
            <li class="menu-item {{Route::is('product.*') ? 'active open' : ''}}">
                <a href="javascript:void(0);" class="menu-link menu-toggle">
                    <i class="menu-icon tf-icons bx bxs-box"></i>
                    <div data-i18n="Product">Product</div>
                </a>

                <ul class="menu-sub">
                    @can('create-product')
                        <li class="menu-item {{Route::is('product.create') ? 'active' : ''}}">
                            <a href="{{route('product.create')}}" class="menu-link">
                                <div data-i18n="Without menu">Add New Product</div>
                            </a>
                        </li>
                    @endcan
                    <li class="menu-item {{Route::is('product.index') ? 'active' : ''}}">
                        <a href="{{route('product.index')}}" class="menu-link">
                            <div data-i18n="Without navbar">View All Products</div>
                        </a>
                    </li>
                    <li class="menu-item {{Route::is('product-category.index') ? 'active' : ''}}">
                        <a href="{{route('product-category.index')}}" class="menu-link">
                            <div data-i18n="Without navbar">View All Categories</div>
                        </a>
                    </li>
                    <li class="menu-item {{Route::is('product-category.create') ? 'active' : ''}}">
                        <a href="{{route('product-category.create')}}" class="menu-link">
                            <div data-i18n="Without menu">Add New Category</div>
                        </a>
                    </li>
                </ul>
            </li>
        @endcan
    @can('read-service')
    <li class="menu-item {{Route::is('service.*') ? 'active open' : ''}}">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bxs-wrench"></i>
            <div data-i18n="Layouts">Service</div>
        </a>

        <ul class="menu-sub">
            @can('create-service')
            <li class="menu-item {{Route::is('service.create') ? 'active' : ''}}">
                <a href="{{route('service.create')}}" class="menu-link">
                    <div data-i18n="Without menu">Add New Service</div>
                </a>
            </li>
            @endcan
            <li class="menu-item {{Route::is('service.index') ? 'active' : ''}}">
                <a href="{{route('service.index')}}" class="menu-link">
                    <div data-i18n="Without navbar">View All Services</div>
                </a>
            </li>

        </ul>
    </li>
    @endcan
    @can('read-team')
    <li class="menu-item {{Route::is('team.*') ? 'active open' : ''}}">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bxs-user-plus"></i>
            <div data-i18n="Layouts">Our Team</div>
        </a>

        <ul class="menu-sub">
            @can('create-team')
            <li class="menu-item {{Route::is('team.create') ? 'active' : ''}}">
                <a href="{{route('team.create')}}" class="menu-link">
                    <div data-i18n="Without menu">Add New Member</div>
                </a>
            </li>
            @endcan
            <li class="menu-item {{Route::is('team.index') ? 'active' : ''}}">
                <a href="{{route('team.index')}}" class="menu-link">
                    <div data-i18n="Without navbar">View All Team Member</div>
                </a>
            </li>

        </ul>
    </li>
    @endcan
    @can('read-industry')
    <li class="menu-item {{Route::is('industry.*') ? 'active open' : ''}}">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-building-house"></i>
            <div data-i18n="Product">Industry</div>
        </a>

        <ul class="menu-sub">
            @can('create-industry')
            <li class="menu-item {{Route::is('industry.create') ? 'active' : ''}}">
                <a href="{{route('industry.create')}}" class="menu-link">
                    <div data-i18n="Without menu">Add New Industry</div>
                </a>
            </li>
            @endcan

            <li class="menu-item {{Route::is('industry.index') ? 'active' : ''}}">
                <a href="{{route('industry.index')}}" class="menu-link">
                    <div data-i18n="Without navbar">View All Industries</div>
                </a>
            </li>
        </ul>
    </li>
    @endcan
    @can('read-software')
    <li class="menu-item {{Route::is('software.*') ? 'active open' : ''}}">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-book"></i>
            <div data-i18n="Product">Software</div>
        </a>

        <ul class="menu-sub">
            @can('create-software')
            <li class="menu-item {{Route::is('software.create') ? '`active' : ''}}">
                <a href="{{route('software.create')}}" class="menu-link">
                    <div data-i18n="Without menu">Add New Software</div>
                </a>
            </li>
            @endcan
            <li class="menu-item {{Route::is('industry.index') ? 'active' : ''}}">
                <a href="{{route('software.index')}}" class="menu-link">
                    <div data-i18n="Without navbar">View All Softwares</div>
                </a>
            </li>
        </ul>
    </li>
    @endcan
    <li class="menu-item" {{Route::is('contact.index') ? 'active' : ''}}>
        <a href="{{route('contact.index')}}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-book-bookmark"></i>
            <div data-i18n="Without navbar">Contact Applications</div>
        </a>
    </li>

    @can('crud-quotation')
    <li class="menu-item" {{Route::is('order.index') ? 'active' : ''}}>
        <a href="{{route('order.index')}}" class="menu-link">
            <i class="menu-icon tf-icons bx bx-book-bookmark"></i>
            <div data-i18n="Without navbar">View All Qoutations</div>
        </a>
    </li>
    @endcan
    @can('academy-setting')
    <li class="menu-header small text-uppercase">
        <span class="menu-header-text">IBN Firnas Academy</span>
    </li>
    <li class="menu-item">
        <a href="{{route('setting.academy.index')}}" class="menu-link">
            <i class='menu-icon tf-icons bx bx-book-alt'></i>
            <div data-i18n="Without navbar">Academy page Setting</div>
        </a>
    </li>
    @endcan
    @can('crud-course-application')
    <li class="menu-item">
        <a href="{{route('course-enrollment.index')}}" class="menu-link">
            <i class='menu-icon tf-icons bx bx-book-alt'></i>
            <div data-i18n="Without navbar">Courses Applications</div>
        </a>
    </li>
    @endcan
    @can('read-course')
    <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class='menu-icon tf-icons bx bx-book-alt'></i>
            <div data-i18n="Layouts">Courses</div>
        </a>

        <ul class="menu-sub">
            @can('create-course')
            <li class="menu-item {{Route::is('course.create') ? 'active' : ''}}">
                <a href="{{route('course.create')}}" class="menu-link">
                    <div data-i18n="Without menu">Add New Course</div>
                </a>
            </li>
            @endcan
            <li class="menu-item {{Route::is('course-category.create') ? 'active' : ''}}">
                <a href="{{route('course-category.create')}}" class="menu-link">
                    <div data-i18n="Without menu">Add New Category</div>
                </a>
            </li>
            <li class="menu-item {{Route::is('course.index') ? 'active' : ''}}">
                <a href="{{route('course.index')}}" class="menu-link">
                    <div data-i18n="Without navbar">View All Courses</div>
                </a>
            </li>
            <li class="menu-item">
                <a href="{{route('course-category.index')}}" class="menu-link">
                    <div data-i18n="Without menu">View All Categories</div>
                </a>
            </li>
        </ul>
    </li>
    @endcan

    @can('crud-academy-slider')
    <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class='menu-icon tf-icons bx bx-book-alt'></i>
            <div data-i18n="Layouts">Academy Slider</div>
        </a>

        <ul class="menu-sub">
            <li class="menu-item {{Route::is('academy-slider.create') ? 'active' : ''}}">
                <a href="{{route('academy-slider.create')}}" class="menu-link">
                    <div data-i18n="Without menu">Add New Slide</div>
                </a>
            </li>
            <li class="menu-item {{Route::is('academy-slider.index') ? 'active' : ''}}">
                <a href="{{route('academy-slider.index')}}" class="menu-link">
                    <div data-i18n="Without navbar">View All Slides</div>
                </a>
            </li>
        </ul>
    </li>
    @endcan


    @canany(['read-role', 'read-user'])
    <li class="menu-header small text-uppercase">
        <span class="menu-header-text">Role & Permission</span>
    </li>
    @endcanany

    @can('read-user')
    <li class="menu-item {{Route::is('user.*') ? 'active open' : ''}}">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-user"></i>
            <div data-i18n="Layouts">User</div>
        </a>

        <ul class="menu-sub">
            @can('create-user')
            <li class="menu-item {{Route::is('user.create') ? 'active' : ''}}">
                <a href="{{route('user.create')}}" class="menu-link">
                    <div data-i18n="Without menu">Add New User</div>
                </a>
            </li>
            @endcan
            <li class="menu-item {{Route::is('user.index') ? 'active' : ''}}">
                <a href="{{route('user.index')}}" class="menu-link">
                    <div data-i18n="Without navbar">View All Users</div>
                </a>
            </li>
        </ul>
    </li>
    @endcan
    @can('read-role')
    <li class="menu-item {{Route::is('role.*') ? 'active open' : ''}}">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-layout"></i>
            <div data-i18n="Layouts">Role</div>
        </a>

        <ul class="menu-sub">
            @can('create-role')
            <li class="menu-item {{Route::is('role.create') ? 'active' : ''}}">
                <a href="{{route('role.create')}}" class="menu-link">
                    <div data-i18n="Without menu">Add New Role</div>
                </a>
            </li>
            @endcan
            <li class="menu-item {{Route::is('role.index') ? 'active' : ''}}">
                <a href="{{route('role.index')}}" class="menu-link">
                    <div data-i18n="Without navbar">View All Roles</div>
                </a>
            </li>
        </ul>
    </li>
    @endcan
    @can('read-permission')
    <li class="menu-item {{Route::is('permission.*') ? 'active open' : ''}}">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-layout"></i>
            <div data-i18n="Layouts">Permission</div>
        </a>

        <ul class="menu-sub">
            @can('create-permission')
            <li class="menu-item {{Route::is('permission.create') ? 'active' : ''}}">
                <a href="{{route('permission.create')}}" class="menu-link">
                    <div data-i18n="Without menu">Add New Permission</div>
                </a>
            </li>
            @endcan
            <li class="menu-item {{Route::is('permission.index') ? 'active' : ''}}">
                <a href="{{route('permission.index')}}" class="menu-link">
                    <div data-i18n="Without navbar">View All Permissions</div>
                </a>
            </li>
        </ul>
    </li>
    @endcan
    @can('crud-setting')
    <li class="menu-header small text-uppercase">
        <span class="menu-header-text">All Setting</span>
    </li>
    <li class="menu-item {{Route::is('setting.*') ? 'active open' : ''}}">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class="menu-icon tf-icons bx bx-cog"></i>
            <div data-i18n="Account Settings">Setting</div>
        </a>
        <ul class="menu-sub">
            <li class="menu-item {{Route::is('setting.index') ? 'active' : ''}}">
                <a href="{{ route('setting.index') }}" class="menu-link">
                    <div data-i18n="Notifications">Setting</div>
                </a>
            </li>
        </ul>
    </li>
    @endcan

    </ul>
</aside>
