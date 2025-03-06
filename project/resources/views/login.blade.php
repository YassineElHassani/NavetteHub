@extends('layout')
@section('title', 'NavetteHub | Login')

@section('content')
    <div class="container">
        <div class="row justify-content-center min-vh-100 align-items-center">
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card shadow-sm border-0 p-4 mb-5">
                    <div class="text-center mb-4">
                        <h3 class="text-primary fw-bold">NavetteHub</h3>
                        <p class="text-muted">Route Reserve Platform</p>
                    </div>
                    
                    <div class="mt-5">
                        @if ($errors->any())
                            <div class="col-12">
                                @foreach ($errors->all() as $error)
                                    <div class="alert alert-danger">{{ $error }}</div>
                                @endforeach
                            </div>
                        @endif

                        @if (session()->has('Error'))
                            <div class="alert alert-danger">{{session('Error')}}</div>
                        @endif

                        @if (session()->has('Success'))
                            <div class="alert alert-success">{{session('Success')}}</div>
                        @endif
                    </div>

                    <form action="{{ route('login.post') }}" method="POST">
                        <h4 class="text-center mb-4">Login to your account</h4>
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="name@example.com" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-lock"></i></span>
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Enter your password" required>
                            </div>
                        </div>

                        <div class="mb-3 d-flex justify-content-between">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="rememberMe" name="remember">
                                <label class="form-check-label" for="rememberMe">Remember me</label>
                            </div>
                            <a href="forgot-password.html" class="text-decoration-none">Forgot password?</a>
                        </div>

                        <div class="d-grid gap-2 mb-4">
                            <button type="submit" class="btn btn-primary">Sign In</button>
                        </div>

                        <div class="text-center">
                            <p class="mb-0">Don't have an account? <a href="{{ route('register') }}"
                                    class="text-decoration-none">Register now</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection