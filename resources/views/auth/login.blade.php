@extends('layouts.base', ['title' => 'Sign In'])

@section('body_attribute')
     class="authentication-bg"
@endsection

@section('content')
<div class="auth-fluid">
    <!-- Auth fluid right content -->
    <div class="auth-fluid-right text-center" {{ (isset($sliders) && count($sliders) > 0) ? 'style=background:none;padding:0;' : '' }}>
        @if(isset($sliders) && count($sliders) > 0)
            <div id="authCarousel" class="carousel slide h-100" data-bs-ride="carousel">
                <div class="carousel-inner h-100">
                    @foreach($sliders as $key => $slider)
                        <div class="carousel-item h-100 {{ $key === 0 ? 'active' : '' }}" 
                             data-bs-interval="3000"
                             style="background-image: url({{ $slider['image'] }}); background-size: cover; background-position: center;">
                            <div class="auth-user-testimonial p-5 d-flex flex-column justify-content-center h-100" style="background: rgba(0,0,0, 0.4);">
                                <h2 class="mb-3 text-white">{{ $slider['title'] }}</h2>
                                <p class="lead"><i class="bx bxs-quote-alt-left text-primary fs-22"></i> {{ $slider['description'] }} <i class="bx bxs-quote-alt-right text-primary fs-22"></i></p>
                            </div>
                        </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#authCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#authCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        @else
            <div class="auth-user-testimonial">
                <h2 class="mb-3 text-white">Seamless Management</h2>
                <p class="lead"><i class="bx bxs-quote-alt-left text-primary fs-22"></i> Streamline your operations with our advanced POS system. Secure, fast, and reliable. <i class="bx bxs-quote-alt-right text-primary fs-22"></i></p>
                <h5 class="text-white">
                    - Manager
                </h5>
            </div> <!-- end auth-user-testimonial-->
        @endif
    </div>
    <!-- end Auth fluid right content -->

    <!--Auth fluid left content -->
    <div class="auth-fluid-form-box">
        <div class="align-items-center d-flex h-100">
            <div class="p-3 w-100 fade show active">

                <!-- Logo -->
                <div class="auth-brand text-center text-lg-start">
                    <div class="auth-logo">
                        <a href="/" class="logo logo-dark text-center">
                            <span class="logo-lg">
                                <img src="/images/logo-dark.png" alt="" height="30">
                            </span>
                        </a>
            
                        <a href="/" class="logo logo-light text-center">
                            <span class="logo-lg">
                                <img src="/images/logo-white.png" alt="" height="30">
                            </span>
                        </a>
                    </div>
                </div>

                <!-- title-->
                <h4 class="mt-0 fw-bold fs-20">Sign In</h4>
                <p class="text-muted mb-4">Enter your email address and password to access account.</p>

                <!-- form -->
                <form action="/authenticate" method="POST">
                    @csrf
                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show text-center mb-3" role="alert">
                            {{ $errors->first() }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif

                    <div class="mb-3">
                        <label for="emailaddress" class="form-label">Email address</label>
                        <input class="form-control form-control-lg" type="email" id="emailaddress" name="email" required="" placeholder="Enter your email">
                    </div>

                    <div class="mb-3">
                        <a href="/reset-password" class="text-muted float-end"><small>Forgot your password?</small></a>
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group input-group-merge">
                            <input type="password" id="password" name="password" class="form-control form-control-lg" placeholder="Enter your password">
                            <div class="input-group-text cursor-pointer" data-password="false">
                                <iconify-icon icon="solar:eye-closed-bold" class="fs-20 text-muted"></iconify-icon>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="checkbox-signin">
                            <label class="form-check-label" for="checkbox-signin">Remember me</label>
                        </div>
                    </div>

                    <div class="text-center d-grid">
                        <button class="btn btn-primary btn-lg rounded-pill fw-medium" type="submit">Log In </button>
                    </div>

                </form>
                <!-- end form-->

                <!-- Footer-->
                <footer class="footer footer-alt">
                    <p class="text-muted text-center mt-4">Don't have an account? <a href="/register" class="text-primary fw-semibold ms-1"><b>Sign Up</b></a></p>
                </footer>

            </div> <!-- end .card-body -->
        </div> <!-- end .align-items-center.d-flex.h-100-->
    </div>
    <!-- end auth-fluid-form-box-->
</div>
<!-- end auth-fluid-->
@endsection

@section('scripts')
    @vite('resources/js/pages/auth-custom.js')
@endsection