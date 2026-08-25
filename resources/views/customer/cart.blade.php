@extends('layouts.customer')

@section('title', 'Shopping Cart - FreshMart')

@section('content')

<section class="page-banner">

    <div class="container">

        <p>Home / Cart</p>

        <h1>Shopping Cart</h1>

    </div>

</section>


<section class="section">

    <div class="container cart-layout">


        <div class="cart-table-wrapper">

            <table class="cart-table">

                <thead>

                    <tr>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th></th>
                    </tr>

                </thead>


                <tbody id="cart-body">

                    <tr>

                        <td>

                            <div class="cart-product">

                                <div class="cart-product-image">
                                    🍎
                                </div>

                                <strong>Fresh Red Apple</strong>

                            </div>

                        </td>

                        <td>$2.50</td>

                        <td>

                            <div class="quantity-control">

                                <button class="quantity-minus">−</button>

                                <span class="quantity">1</span>

                                <button class="quantity-plus">+</button>

                            </div>

                        </td>

                        <td class="cart-item-total">$2.50</td>

                        <td>

                            <button class="remove-item">
                                <i class="fa-solid fa-trash"></i>
                            </button>

                        </td>

                    </tr>


                    <tr>

                        <td>

                            <div class="cart-product">

                                <div class="cart-product-image">
                                    🥕
                                </div>

                                <strong>Fresh Carrot</strong>

                            </div>

                        </td>

                        <td>$1.80</td>

                        <td>

                            <div class="quantity-control">

                                <button class="quantity-minus">−</button>

                                <span class="quantity">2</span>

                                <button class="quantity-plus">+</button>

                            </div>

                        </td>

                        <td class="cart-item-total">$3.60</td>

                        <td>

                            <button class="remove-item">
                                <i class="fa-solid fa-trash"></i>
                            </button>

                        </td>

                    </tr>

                </tbody>

            </table>

        </div>


        <div class="cart-summary">

            <h2>Cart Summary</h2>

            <div class="summary-row">

                <span>Subtotal</span>

                <strong id="cart-subtotal">$6.10</strong>

            </div>


            <div class="summary-row">

                <span>Delivery</span>

                <strong>$2.00</strong>

            </div>


            <hr>


            <div class="summary-row total-row">

                <span>Total</span>

                <strong id="cart-total">$8.10</strong>

            </div>


            <a href="{{ route('checkout') }}"
               class="checkout-btn">

                Proceed to Checkout

                <i class="fa-solid fa-arrow-right"></i>

            </a>

        </div>

    </div>

</section>

@endsection