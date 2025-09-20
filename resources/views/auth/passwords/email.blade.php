@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-white text-center font-weight-bold">
                        {{ __('Forgot Password') }}
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success small" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <p class="small text-muted text-center">
                            Enter your email address and we’ll send you a link to reset your password.
                        </p>

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <div class="form-group">
                                <label for="email" class="small">{{ __('Email Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback small" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-dark btn-block">
                                {{ __('Send Password Reset Link') }}
                            </button>
                        </form>
                    </div>

                    <div class="card-footer bg-white text-center small">
                        <a href="{{ route('login') }}">Back to Login</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection