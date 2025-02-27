@extends('frontend.layouts.app')
@section('title', 'Login')
@php
    $hideHeader = true;
@endphp
@section('content')
<div class="bigshop_reg_log_area section_padding_100_50 d-flex justify-content-center align-items-center" 
     style="min-height: 100vh; background: linear-gradient(135deg, #6e8efb, #a777e3);">

    <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-12 col-md-6">
                <div class="card shadow-lg border-0 rounded-3 p-4" style="background: white;">

                    <!-- Login Heading -->
                    <h3 class="text-center text-primary fw-bold mb-4">Welcome Back!</h3>
                    <p class="text-center text-muted">Login to access your account</p>

                    <form action="my-account.html" method="post">
                        <!-- Email Input -->
                        <div class="form-group mb-3">
                            <label for="username" class="fw-semibold">Email or Username</label>
                            <input type="email" class="form-control rounded-3 shadow-sm" id="username" placeholder="Enter your email">
                        </div>

                        <!-- Password Input -->
                        <div class="form-group mb-3">
                            <label for="password" class="fw-semibold">Password</label>
                            <input type="password" class="form-control rounded-3 shadow-sm" id="password" placeholder="Enter your password">
                        </div>

                        <!-- Remember Me Checkbox -->
                        <div class="form-check d-flex align-items-center">
                            <input type="checkbox" class="form-check-input" id="customChe">
                            <label class="form-check-label ms-2 text-muted" for="customChe">Remember me</label>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary w-100 mt-4 rounded-pill shadow-sm">Login</button>
                    </form>

                    <!-- Forget Password & Register Links -->
                    <div class="text-center mt-3">
                        <a href="#" class="text-decoration-none text-primary">Forgot Password?</a> |
                        <a href="register.html" class="text-decoration-none text-success">Create Account</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    @php
        $hideFooter = true;
    @endphp
@endsection
