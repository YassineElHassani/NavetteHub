@extends('layout')
@section('title', 'NavetteHub | Register')

@section('content')
    <div class="container">
        <div class="row justify-content-center min-vh-100 align-items-center py-5">
            <div class="col-12 col-md-8 col-lg-6">
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

                    <form action="{{ route('register.post') }}" method="POST">
                        <h4 class="text-center mb-4">Create an Account</h4>
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Full Name</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-person"></i></span>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Enter your full name" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="name@example.com" required>
                            </div>
                            <div class="form-text">We'll never share your email with anyone else.</div>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-lock"></i></span>
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Create a password" required>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="role" class="form-label">Account Type</label>
                            <select class="form-select" id="role" name="role" required>
                                <option value="" selected disabled>Select account type</option>
                                <option value="client">Regular User</option>
                                <option value="company">Transport Company</option>
                            </select>
                        </div>

                        <div id="companyFields" class="d-none mb-3">
                            <div class="mb-3">
                                <label for="company_name" class="form-label">Company Name</label>
                                <input type="text" class="form-control" id="company_name" name="company_name"
                                    placeholder="Enter company name">
                            </div>
                        </div>

                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="terms" name="terms" required>
                            <label class="form-check-label" for="terms">I agree to the <a href="terms.html"
                                    class="text-decoration-none">Terms and Conditions</a></label>
                        </div>

                        <div class="d-grid gap-2 mb-4">
                            <button type="submit" class="btn btn-primary">Register</button>
                        </div>

                        <div class="text-center">
                            <p class="mb-0">Already have an account? <a href="/login" class="text-decoration-none">Sign
                                    in</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('role').addEventListener('change', function () {
            const companyFields = document.getElementById('companyFields');
            if (this.value === 'company') {
                companyFields.classList.remove('d-none');
            } else {
                companyFields.classList.add('d-none');
            }
        });
    </script>
@endsection