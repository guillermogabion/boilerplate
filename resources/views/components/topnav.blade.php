<nav class="bottom-navbar">
    <div class="container">
        <ul class="nav page-navigation">
            <li class="nav-item">
                <a class="nav-link" href="{{route('home')}}">
                    <i class="mdi mdi-file-document-box menu-icon"></i>
                    <span class="menu-title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item {{ request()->routeIs('inventory') || request()->routeIs('cashier') ? 'active' : '' }}">
                <a href="{{route('inventory')}}" class="nav-link">
                    <i class="mdi mdi-book-open-page-variant menu-icon"></i>
                    <span class="menu-title">Inventory</span>
                    <i class="menu-arrow"></i>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('warehouse')}}" class="nav-link">
                    <i class="mdi mdi-store menu-icon"></i>
                    <span class="menu-title">Warehouse</span>
                    <i class="menu-arrow"></i>
                </a>
            </li>
            <li class="nav-item">
                <a href="pages/forms/basic_elements.html" class="nav-link">
                    <i class="mdi mdi-cart-outline menu-icon"></i>
                    <span class="menu-title">Orders</span>
                    <i class="menu-arrow"></i>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('users')}}" class="nav-link">
                    <i class="mdi mdi-account-multiple menu-icon"></i>
                    <span class="menu-title">Users</span>
                    <i class="menu-arrow"></i>
                </a>
            </li>
        </ul>
    </div>
</nav>