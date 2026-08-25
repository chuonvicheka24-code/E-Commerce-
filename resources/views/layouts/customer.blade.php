<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'FreshMart')</title>

    <link rel="stylesheet"
          href="{{ asset('assets/css/customer.css') }}">

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>

    <!-- TOP BAR -->
    <div class="top-bar">
        <div class="container top-content">
            <span>
                <i class="fa-solid fa-truck"></i>
                Free delivery on orders over $30
            </span>

            <span>
                <i class="fa-solid fa-location-dot"></i>
                Phnom Penh, Cambodia
            </span>
        </div>
    </div>


    <!-- HEADER -->
    <header class="header">

        <div class="container header-content">

            <a href="{{ route('home') }}" class="logo">
                MINI <span> MART</span>
            </a>


            <div class="search-box">

                <select id="category-select">
                    <option value="all">All Categories</option>
                    <option value="fruit">Fruit</option>
                    <option value="vegetable">Vegetable</option>
                    <option value="meat">Meat</option>
                    <option value="drinks">Drinks</option>
                    <option value="grocery">Grocery</option>
                </select>

                <input
                    type="text"
                    id="search-input"
                    placeholder="Search products...">

                <button id="search-button">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>

            </div>


            <div class="header-actions">

                <a href="#" class="header-action">
                    <i class="fa-regular fa-heart"></i>
                    <span>Wishlist</span>
                </a>

                <a href="{{ route('login') }}" class="header-action">
                    <i class="fa-regular fa-user"></i>
                    <span>Account</span>
                </a>

                <a href="{{ route('cart') }}" class="header-action cart-action">
                    <i class="fa-solid fa-cart-shopping"></i>
                    <b class="cart-count" id="cart-count">0</b>
                    <span>Cart</span>
                </a>

            </div>

        </div>

    </header>


    <!-- NAVIGATION -->
    <nav class="navigation">

        <div class="container nav-content">

            <div class="category-wrapper">

                <button class="category-btn" id="category-button">

                    <i class="fa-solid fa-bars"></i>

                    Browse Categories

                    <i class="fa-solid fa-chevron-down"></i>

                </button>


                <div class="category-menu" id="category-menu">

                    <a href="{{ route('products') }}">🍎 Fruit</a>
                    <a href="{{ route('products') }}">🥕 Vegetables</a>
                    <a href="{{ route('products') }}">🥩 Meat</a>
                    <a href="{{ route('products') }}">🥤 Drinks</a>
                    <a href="{{ route('products') }}">🛒 Grocery</a>

                </div>

            </div>


            <ul class="nav-links">

                <li>
                    <a href="{{ route('home') }}">Home</a>
                </li>

                <li>
                    <a href="{{ route('products') }}">Shop</a>
                </li>

                <li>
                    <a href="{{ route('products') }}">Categories</a>
                </li>

                <li>
                    <a href="{{ route('products') }}">Deals</a>
                </li>

                <li>
                    <a href="#about">About Us</a>
                </li>

                <li>
                    <a href="#contact">Contact</a>
                </li>

            </ul>

        </div>

    </nav>


    <!-- PAGE CONTENT -->
    <main>

        @yield('content')

    </main>


    <!-- FOOTER -->
    <footer class="footer">

        <div class="container">

            <div class="footer-grid">

                <div>

                    <h3>Winnie Supermaket</h3>

                    <p>
                        Your trusted online supermarket for fresh groceries,
                        vegetables, meat and everyday essentials.
                    </p>

                </div>


                <div>

                    <h3>Categories</h3>

                    <ul>
                        <li><a href="{{ route('products') }}">Fruit</a></li>
                        <li><a href="{{ route('products') }}">Vegetable</a></li>
                        <li><a href="{{ route('products') }}">Meat</a></li>
                        <li><a href="{{ route('products') }}">Drinks</a></li>
                    </ul>

                </div>


                <div>

                    <h3>Customer</h3>

                    <ul>
                        <li><a href="{{ route('login') }}">My Account</a></li>
                        <li><a href="{{ route('cart') }}">Shopping Cart</a></li>
                        <li><a href="{{ route('checkout') }}">Checkout</a></li>
                        <li><a href="#">Wishlist</a></li>
                    </ul>

                </div>


                <div id="contact">

                    <h3>Contact Us</h3>

                    <ul>
                        <li>📍 Phnom Penh, Cambodia</li>
                        <li>📞 +855 12 345 678</li>
                        <li>✉ freshmart@gmail.com</li>
                    </ul>

                </div>

            </div>


            <div class="footer-bottom">

                © 2026 FreshMart Online Supermarket.
                All Rights Reserved.

            </div>

        </div>

    </footer>


    <script src="{{ asset('assets/js/customer.js') }}"></script>

</body>
</html>