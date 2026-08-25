<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'FreshMart Admin')</title>

    <link rel="stylesheet"
          href="{{ asset('assets/css/admin.css') }}">

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>

<body>

<div class="admin-wrapper">


    <!-- SIDEBAR -->
    <aside class="admin-sidebar" id="adminSidebar">

        <div class="admin-logo">

            <div class="admin-logo-icon">
                <i class="fa-solid fa-basket-shopping"></i>
            </div>

            <div>

                <h2>Fresh<span>Mart</span></h2>

                <small>ADMIN PANEL</small>

            </div>

        </div>


        <nav class="admin-menu">

            <p class="menu-title">MAIN MENU</p>


            <a href="{{ route('admin.dashboard') }}"
               class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">

                <i class="fa-solid fa-chart-line"></i>

                <span>Dashboard</span>

            </a>


            <a href="{{ route('admin.products') }}"
               class="{{ request()->routeIs('admin.products') ? 'active' : '' }}">

                <i class="fa-solid fa-box"></i>

                <span>Products</span>

            </a>


            <a href="{{ route('admin.orders') }}"
               class="{{ request()->routeIs('admin.orders') ? 'active' : '' }}">

                <i class="fa-solid fa-cart-shopping"></i>

                <span>Orders</span>

                <b class="menu-badge">12</b>

            </a>


            <a href="{{ route('admin.inventory') }}"
               class="{{ request()->routeIs('admin.inventory') ? 'active' : '' }}">

                <i class="fa-solid fa-warehouse"></i>

                <span>Inventory</span>

            </a>


            <p class="menu-title second-title">
                MANAGEMENT
            </p>


            <a href="#">

                <i class="fa-solid fa-users"></i>

                <span>Customers</span>

            </a>


            <a href="#">

                <i class="fa-solid fa-tags"></i>

                <span>Categories</span>

            </a>


            <a href="#">

                <i class="fa-solid fa-chart-pie"></i>

                <span>Reports</span>

            </a>


            <a href="#">

                <i class="fa-solid fa-gear"></i>

                <span>Settings</span>

            </a>

        </nav>


        <div class="admin-sidebar-bottom">

            <div class="admin-user">

                <div class="admin-avatar">
                    AD
                </div>


                <div>

                    <strong>Admin User</strong>

                    <small>Administrator</small>

                </div>


                <i class="fa-solid fa-ellipsis"></i>

            </div>

        </div>

    </aside>


    <!-- MAIN -->
    <div class="admin-main">


        <!-- HEADER -->
        <header class="admin-header">

            <div class="header-left">

                <button
                    class="sidebar-toggle"
                    id="sidebarToggle">

                    <i class="fa-solid fa-bars"></i>

                </button>


                <div class="admin-search">

                    <i class="fa-solid fa-magnifying-glass"></i>

                    <input
                        type="text"
                        placeholder="Search anything...">

                </div>

            </div>


            <div class="header-right">

                <button class="header-icon notification-btn">

                    <i class="fa-regular fa-bell"></i>

                    <span class="notification-dot"></span>

                </button>


                <button class="header-icon">

                    <i class="fa-regular fa-envelope"></i>

                </button>


                <a href="{{ route('home') }}"
                   class="view-store-btn">

                    <i class="fa-solid fa-store"></i>

                    View Store

                </a>

            </div>

        </header>


        <!-- CONTENT -->
        <main class="admin-content">

            @yield('content')

        </main>

    </div>

</div>


<!-- NOTIFICATION -->

<div class="admin-notification"
     id="adminNotification">

    <i class="fa-solid fa-circle-check"></i>

    <span id="notificationText">
        Action completed successfully!
    </span>

</div>


<script src="{{ asset('assets/js/admin.js') }}"></script>

</body>
</html>