@extends('layouts.customer')

@section('title', 'FreshMart - Online Supermarket')

@section('content')

<!-- HERO -->
<section class="hero">

    <div class="container">

        <div class="hero-box">

            <div class="hero-content">

                <span class="hero-tag">
                    ⚡ HOT DEALS
                </span>

                <h1>
                    Fresh Groceries Delivered
                    To Your Door
                </h1>

                <p>
                    Shop fresh fruits, vegetables, meat,
                    drinks and everyday essentials online.
                </p>

                <a href="{{ route('products') }}" class="shop-btn">

                    Shop Now

                    <i class="fa-solid fa-arrow-right"></i>

                </a>

            </div>


            <div class="hero-image">

                <img src="{{ asset('images/7087714.jpg') }}" 
                alt="Fresh Groceries Graphics" style="width: 100%; 
                max-width: 400px; height: auto;">

                <!-- <div class="hero-emoji">🥬</div>
                <div class="hero-emoji second">🍎</div>
                <div class="hero-emoji third">🥕</div> -->

            </div>

        </div>

    </div>

</section>


<!-- FEATURES -->
<section class="features">

    <div class="container feature-grid">

        <div class="feature-item">

            <div class="feature-icon">
                <i class="fa-solid fa-truck-fast"></i>
            </div>

            <div>
                <h3>Fast Delivery</h3>
                <p>Fresh groceries delivered fast.</p>
            </div>

        </div>


        <div class="feature-item">

            <div class="feature-icon">
                <i class="fa-solid fa-leaf"></i>
            </div>

            <div>
                <h3>Fresh Products</h3>
                <p>Quality products every day.</p>
            </div>

        </div>


        <div class="feature-item">

            <div class="feature-icon">
                <i class="fa-solid fa-shield-halved"></i>
            </div>

            <div>
                <h3>Secure Payment</h3>
                <p>Your payment is protected.</p>
            </div>

        </div>


        <div class="feature-item">

            <div class="feature-icon">
                <i class="fa-solid fa-headset"></i>
            </div>

            <div>
                <h3>24/7 Support</h3>
                <p>We're here to help you.</p>
            </div>

        </div>

    </div>

</section>


<!-- CATEGORIES -->
<section class="section">

    <div class="container">

        <div class="section-header">

            <div>
                <p class="section-subtitle">SHOP BY CATEGORY</p>
                <h2>Popular <span>Categories</span></h2>
            </div>

            <a href="{{ route('products') }}" class="text-link">
                View All
                <i class="fa-solid fa-arrow-right"></i>
            </a>

        </div>


        <div class="category-grid">

            <a href="{{ route('products') }}" class="category-card">
                <div class="category-icon">🍎</div>
                <h3>Fruit</h3>
                <p>Fresh & Sweet</p>
            </a>

            <a href="{{ route('products') }}" class="category-card">
                <div class="category-icon">🥕</div>
                <h3>Vegetables</h3>
                <p>Fresh Daily</p>
            </a>

            <a href="{{ route('products') }}" class="category-card">
                <div class="category-icon">🥩</div>
                <h3>Meat</h3>
                <p>Premium Quality</p>
            </a>

            <a href="{{ route('products') }}" class="category-card">
                <div class="category-icon">🥤</div>
                <h3>Drinks</h3>
                <p>Cold & Refreshing</p>
            </a>

            <a href="{{ route('products') }}" class="category-card">
                <div class="category-icon">🛒</div>
                <h3>Grocery</h3>
                <p>Daily Essentials</p>
            </a>

        </div>

    </div>

</section>


<!-- PRODUCTS -->
<section class="section light-section" id="products">

    <div class="container">

        <div class="section-header">

            <div>
                <p class="section-subtitle">BEST SELLERS</p>
                <h2>Popular <span>Products</span></h2>
            </div>

            <a href="{{ route('products') }}" class="text-link">
                View All Products
                <i class="fa-solid fa-arrow-right"></i>
            </a>

        </div>


        <div class="product-grid">

            <div class="product-card"
                 data-name="Fresh Apple"
                 data-category="fruit"
                 data-price="2.50">

                <div class="product-image">
                    🍎
                    <span class="product-sale">-15%</span>
                </div>

                <p class="product-category">Fruit</p>

                <h3 class="product-name">Fresh Red Apple</h3>

                <div class="product-rating">
                    ★★★★★
                    <span>(24)</span>
                </div>

                <div class="product-bottom">

                    <div>
                        <span class="product-price">$2.50</span>
                        <del>$2.90</del>
                    </div>

                    <button class="add-cart"
                            data-product="Fresh Red Apple"
                            data-price="2.50">

                        <i class="fa-solid fa-cart-plus"></i>

                    </button>

                </div>

            </div>


            <div class="product-card"
                 data-name="Fresh Carrot"
                 data-category="vegetable"
                 data-price="1.80">

                <div class="product-image">🥕</div>

                <p class="product-category">Vegetable</p>

                <h3 class="product-name">Fresh Carrot</h3>

                <div class="product-rating">
                    ★★★★★
                    <span>(18)</span>
                </div>

                <div class="product-bottom">

                    <span class="product-price">$1.80</span>

                    <button class="add-cart"
                            data-product="Fresh Carrot"
                            data-price="1.80">

                        <i class="fa-solid fa-cart-plus"></i>

                    </button>

                </div>

            </div>


            <div class="product-card"
                 data-name="Premium Beef"
                 data-category="meat"
                 data-price="8.90">

                <div class="product-image">🥩</div>

                <p class="product-category">Meat</p>

                <h3 class="product-name">Premium Beef</h3>

                <div class="product-rating">
                    ★★★★★
                    <span>(31)</span>
                </div>

                <div class="product-bottom">

                    <span class="product-price">$8.90</span>

                    <button class="add-cart"
                            data-product="Premium Beef"
                            data-price="8.90">

                        <i class="fa-solid fa-cart-plus"></i>

                    </button>

                </div>

            </div>


            <div class="product-card"
                 data-name="Fresh Milk"
                 data-category="drinks"
                 data-price="2.00">

                <div class="product-image">🥛</div>

                <p class="product-category">Drinks</p>

                <h3 class="product-name">Fresh Milk</h3>

                <div class="product-rating">
                    ★★★★★
                    <span>(42)</span>
                </div>

                <div class="product-bottom">

                    <span class="product-price">$2.00</span>

                    <button class="add-cart"
                            data-product="Fresh Milk"
                            data-price="2.00">

                        <i class="fa-solid fa-cart-plus"></i>

                    </button>

                </div>

            </div>

        </div>

    </div>

</section>


<!-- PROMOTION -->
<section class="section">

    <div class="container">

        <div class="promo-banner">

            <div>

                <span>WEEKEND SPECIAL</span>

                <h2>Get Up To 30% Off</h2>

                <p>
                    On selected fresh fruits and vegetables.
                </p>

                <a href="{{ route('products') }}" class="promo-btn">
                    Shop Deals
                </a>

            </div>

            <div class="promo-food">
                🥑 🍓 🍊 🥦
            </div>

        </div>

    </div>

</section>

@endsection