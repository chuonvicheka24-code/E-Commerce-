@extends('layouts.customer')

@section('title', 'Shop Products - FreshMart')

@section('content')

<section class="page-banner">

    <div class="container">

        <p>Home / Shop</p>

        <h1>Shop Products</h1>

    </div>

</section>


<section class="section">

    <div class="container shop-layout">


        <!-- SIDEBAR -->
        <aside class="shop-sidebar">

            <h3>Categories</h3>

            <label>
                <input type="radio"
                       name="category"
                       value="all"
                       checked
                       class="category-filter">
                All Products
            </label>

            <label>
                <input type="radio"
                       name="category"
                       value="fruit"
                       class="category-filter">
                Fruit
            </label>

            <label>
                <input type="radio"
                       name="category"
                       value="vegetable"
                       class="category-filter">
                Vegetables
            </label>

            <label>
                <input type="radio"
                       name="category"
                       value="meat"
                       class="category-filter">
                Meat
            </label>

            <label>
                <input type="radio"
                       name="category"
                       value="drinks"
                       class="category-filter">
                Drinks
            </label>


            <hr>


            <h3>Price Range</h3>

            <input type="range"
                   min="0"
                   max="20"
                   value="20"
                   id="price-range">

            <p>
                Up to $<span id="price-value">20</span>
            </p>

        </aside>


        <!-- PRODUCTS -->
        <div class="shop-products">

            <div class="shop-toolbar">

                <p>
                    Showing <strong id="product-result-count">8</strong>
                    products
                </p>

                <select>
                    <option>Latest Products</option>
                    <option>Price Low to High</option>
                    <option>Price High to Low</option>
                </select>

            </div>


            <div class="product-grid products-page-grid">

                <div class="product-card"
                     data-category="fruit"
                     data-price="2.50">

                    <div class="product-image">🍎</div>

                    <p class="product-category">Fruit</p>

                    <h3 class="product-name">Fresh Red Apple</h3>

                    <div class="product-rating">★★★★★</div>

                    <div class="product-bottom">

                        <span class="product-price">$2.50</span>

                        <button class="add-cart"
                                data-product="Fresh Red Apple"
                                data-price="2.50">

                            <i class="fa-solid fa-cart-plus"></i>

                        </button>

                    </div>

                </div>


                <div class="product-card"
                     data-category="fruit"
                     data-price="3.20">

                    <div class="product-image">🍌</div>

                    <p class="product-category">Fruit</p>

                    <h3 class="product-name">Fresh Banana</h3>

                    <div class="product-rating">★★★★★</div>

                    <div class="product-bottom">

                        <span class="product-price">$3.20</span>

                        <button class="add-cart"
                                data-product="Fresh Banana"
                                data-price="3.20">

                            <i class="fa-solid fa-cart-plus"></i>

                        </button>

                    </div>

                </div>


                <div class="product-card"
                     data-category="vegetable"
                     data-price="1.80">

                    <div class="product-image">🥕</div>

                    <p class="product-category">Vegetable</p>

                    <h3 class="product-name">Fresh Carrot</h3>

                    <div class="product-rating">★★★★★</div>

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
                     data-category="vegetable"
                     data-price="2.90">

                    <div class="product-image">🥦</div>

                    <p class="product-category">Vegetable</p>

                    <h3 class="product-name">Fresh Broccoli</h3>

                    <div class="product-rating">★★★★★</div>

                    <div class="product-bottom">

                        <span class="product-price">$2.90</span>

                        <button class="add-cart"
                                data-product="Fresh Broccoli"
                                data-price="2.90">

                            <i class="fa-solid fa-cart-plus"></i>

                        </button>

                    </div>

                </div>


                <div class="product-card"
                     data-category="meat"
                     data-price="8.90">

                    <div class="product-image">🥩</div>

                    <p class="product-category">Meat</p>

                    <h3 class="product-name">Premium Beef</h3>

                    <div class="product-rating">★★★★★</div>

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
                     data-category="meat"
                     data-price="5.50">

                    <div class="product-image">🍗</div>

                    <p class="product-category">Meat</p>

                    <h3 class="product-name">Fresh Chicken</h3>

                    <div class="product-rating">★★★★★</div>

                    <div class="product-bottom">

                        <span class="product-price">$5.50</span>

                        <button class="add-cart"
                                data-product="Fresh Chicken"
                                data-price="5.50">

                            <i class="fa-solid fa-cart-plus"></i>

                        </button>

                    </div>

                </div>


                <div class="product-card"
                     data-category="drinks"
                     data-price="2.00">

                    <div class="product-image">🥛</div>

                    <p class="product-category">Drinks</p>

                    <h3 class="product-name">Fresh Milk</h3>

                    <div class="product-rating">★★★★★</div>

                    <div class="product-bottom">

                        <span class="product-price">$2.00</span>

                        <button class="add-cart"
                                data-product="Fresh Milk"
                                data-price="2.00">

                            <i class="fa-solid fa-cart-plus"></i>

                        </button>

                    </div>

                </div>


                <div class="product-card"
                     data-category="drinks"
                     data-price="1.50">

                    <div class="product-image">🥤</div>

                    <p class="product-category">Drinks</p>

                    <h3 class="product-name">Orange Juice</h3>

                    <div class="product-rating">★★★★★</div>

                    <div class="product-bottom">

                        <span class="product-price">$1.50</span>

                        <button class="add-cart"
                                data-product="Orange Juice"
                                data-price="1.50">

                            <i class="fa-solid fa-cart-plus"></i>

                        </button>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

@endsection