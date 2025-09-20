@extends('layouts.app')

@section('content')
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 80vh;">
        <div class="col-md-5">
            <div class="card shadow-sm border-0">
                <div class="card-body p-4">
                    <h3 class="text-center mb-4">Login</h3>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- Email -->
                        <div class="form-group">
                            <label for="email" class="small">Email Address</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autofocus>
                            @error('email')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Password -->
                        <div class="form-group mt-3">
                            <label for="password" class="small">Password</label>
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required>
                            @error('password')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        <!-- Remember Me -->
                        <div class="form-group form-check mt-3">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember">
                            <label class="form-check-label small" for="remember">
                                Remember Me
                            </label>
                        </div>

                        <!-- Submit -->
                        <div class="d-grid gap-2 mt-4">
                            <button type="submit" class="btn btn-dark btn-block">Login</button>
                        </div>

                        <!-- Links -->
                        <div class="text-center mt-3">
                            @if (Route::has('password.request'))
                                <a class="small" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            @endif
                            <br>
                            <a class="small" href="{{ route('register') }}">Create an account</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection