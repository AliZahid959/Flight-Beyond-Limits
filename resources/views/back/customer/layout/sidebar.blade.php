<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{ route('customer.home') }}" class="app-brand-link">
            <span class="app-brand-logo demo">

            </span>
            <span class="app-brand-text h3 " style="color: #5F61E6">IBN FIRNAS</span>
        </a>
        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>
    <div class="menu-inner-shadow"></div>
    <ul class="menu-inner py-1">
        <li class="menu-item {{ Route::is('customer.home') ? 'active' : '' }}">
            <a href="{{ route('customer.home') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Home Page</div>
            </a>
        </li>
        <li class="menu-item ">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon bx bx-user"></i>
                <div data-i18n="Product">My Profile</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item {{ Route::is('customer.profile-customer.index') ? 'active' : '' }}">
                    <a href="{{ route('customer.profile-customer.index') }}" class="menu-link">
                        <div data-i18n="Without navbar">My Profile</div>
                    </a>
                </li>
                <li class="menu-item {{ Route::is('customer.change-password.index') ? 'active' : '' }}">
                    <a href="{{ route('customer.change-password.index') }}" class="menu-link">
                        <div data-i18n="Without menu">Change Password</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item {{ Route::is('blog.*') ? 'active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon bx bx-notification"></i>
                <div data-i18n="Layouts">Notifications</div>
            </a>

            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="{{ route('customer.view-all-notifications.index') }}" class="menu-link">
                        <div data-i18n="Without menu">View All Notifications</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item" {{ Route::is('customer.orders.index') ? 'active' : '' }}>
            <a href="{{ route('customer.orders.index') }}" class="menu-link">
                <i class='menu-icon bx bx-cart-alt'></i>
                <div data-i18n="Without navbar">Orders</div>
            </a>
        </li>
        <li class="menu-item" {{ Route::is('customer.courses-enrolled.index') ? 'active' : '' }}>
            <a href="{{ route('customer.courses-enrolled.index') }}" class="menu-link">
                <i class="menu-icon bx bx-book-content"></i>
                <div data-i18n="Without navbar">Courses Enrolled</div>
            </a>

        </li>

    </ul>
</aside>
