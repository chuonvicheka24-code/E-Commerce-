@extends('layouts.customer')

@section('title', 'Login - FreshMart')

@section('content')

<section class="auth-section">

    <div class="auth-card">

        <div class="auth-logo">
            Fresh<span>Mart</span>
        </div>

        <h1>Welcome Back!</h1>

        <p>
            Login to your FreshMart account.
        </p>


        <form id="login-form">

            <div class="form-group">

                <label>Email Address</label>

                <input
                    type="email"
                    required
                    placeholder="your@email.com">

            </div>


            <div class="form-group">

                <label>Password</label>

                <div class="password-input">

                    <input
                        type="password"
                        id="password"
                        required
                        placeholder="Enter password">

                    <button
                        type="button"
                        id="toggle-password">

                        <i class="fa-regular fa-eye"></i>

                    </button>

                </div>

            </div>


            <div class="login-options">

                <label>

                    <input type="checkbox">

                    Remember me

                </label>

                <a href="#">Forgot Password?</a>

            </div>


            <button type="submit" class="login-btn">

                Login

            </button>

        </form>


        <p class="register-link">

            Don't have an account?

            <a href="#">Create Account</a>

        </p>

    </div>

</section>

@endsection