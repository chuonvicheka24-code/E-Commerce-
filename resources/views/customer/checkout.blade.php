@extends('layouts.customer')

@section('title', 'Checkout - FreshMart')

@section('content')

<section class="page-banner">

    <div class="container">

        <p>Home / Cart / Checkout</p>

        <h1>Checkout</h1>

    </div>

</section>


<section class="section">

    <div class="container checkout-layout">


        <form class="checkout-form" id="checkout-form">

            <h2>Billing Details</h2>


            <div class="form-row">

                <div class="form-group">

                    <label>First Name</label>

                    <input
                        type="text"
                        required
                        placeholder="First name">

                </div>


                <div class="form-group">

                    <label>Last Name</label>

                    <input
                        type="text"
                        required
                        placeholder="Last name">

                </div>

            </div>


            <div class="form-group">

                <label>Email Address</label>

                <input
                    type="email"
                    required
                    placeholder="your@email.com">

            </div>


            <div class="form-group">

                <label>Phone Number</label>

                <input
                    type="text"
                    required
                    placeholder="+855">

            </div>


            <div class="form-group">

                <label>Address</label>

                <input
                    type="text"
                    required
                    placeholder="Street address">

            </div>


            <div class="form-row">

                <div class="form-group">

                    <label>City</label>

                    <input
                        type="text"
                        placeholder="Phnom Penh">

                </div>


                <div class="form-group">

                    <label>Postal Code</label>

                    <input
                        type="text"
                        placeholder="12000">

                </div>

            </div>


            <h2 class="payment-title">Payment Method</h2>


            <label class="payment-option">

                <input
                    type="radio"
                    name="payment"
                    checked>

                Cash on Delivery

            </label>


            <label class="payment-option">

                <input
                    type="radio"
                    name="payment">

                Credit / Debit Card

            </label>


            <button type="submit" class="place-order-btn">

                Place Order

                <i class="fa-solid fa-lock"></i>

            </button>

        </form>


        <div class="checkout-summary">

            <h2>Your Order</h2>


            <div class="checkout-product">

                <span>Fresh Red Apple × 1</span>

                <strong>$2.50</strong>

            </div>


            <div class="checkout-product">

                <span>Fresh Carrot × 2</span>

                <strong>$3.60</strong>

            </div>


            <hr>


            <div class="checkout-product">

                <span>Subtotal</span>

                <strong>$6.10</strong>

            </div>


            <div class="checkout-product">

                <span>Delivery</span>

                <strong>$2.00</strong>

            </div>


            <div class="checkout-total">

                <span>Total</span>

                <strong>$8.10</strong>

            </div>

        </div>

    </div>

</section>

@endsection