@extends('frontend.layouts.app')
@section('title', 'Register')
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

                        <!-- Register Heading -->
                        <h3 class="text-center text-primary fw-bold mb-4">Create an Account</h3>
                        <p class="text-center text-muted">Join us and start shopping today!</p>

                        <form action="register.html" method="post">
                            <!-- Full Name Input -->
                            <div class="form-group mb-3">
                                <label for="full-name" class="fw-semibold">Full Name</label>
                                <input type="text" class="form-control rounded-3 shadow-sm" id="full-name"
                                    placeholder="Enter your full name">
                            </div>

                            <!-- Email Input -->
                            <div class="form-group mb-3">
                                <label for="email" class="fw-semibold">Email Address</label>
                                <input type="email" class="form-control rounded-3 shadow-sm" id="email"
                                    placeholder="Enter your email">
                            </div>

                            <!-- Password Input -->
                            <div class="form-group mb-3">
                                <label for="password" class="fw-semibold">Password</label>
                                <input type="password" class="form-control rounded-3 shadow-sm" id="password"
                                    placeholder="Create a password">
                            </div>

                            <!-- Confirm Password Input -->
                            <div class="form-group mb-3">
                                <label for="confirm-password" class="fw-semibold">Confirm Password</label>
                                <input type="password" class="form-control rounded-3 shadow-sm" id="confirm-password"
                                    placeholder="Confirm your password">
                            </div>

                            <!-- Terms & Conditions Checkbox -->
                            <div class="form-check d-flex align-items-center">
                                <input type="checkbox" class="form-check-input" id="terms">
                                <label class="form-check-label ms-2 text-muted" for="terms">
                                    I agree to the <a href="#" class="text-decoration-none text-primary">Terms &
                                        Conditions</a>
                                </label>
                            </div>

                            <!-- Submit Button -->
                            <button type="submit"
                                class="btn btn-success w-100 mt-4 rounded-pill shadow-sm">Register</button>
                        </form>

                        <!-- Already Have an Account -->
                        <div class="text-center mt-3">
                            <a href="login.html" class="text-decoration-none text-primary">Already have an account?
                                Login</a>
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
