@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-white text-center font-weight-bold">
                        {{ __('Confirm Password') }}
                    </div>

                    <div class="card-body">
                        <p class="small text-muted text-center">
                            Please confirm your password before continuing.
                        </p>

                        <form method="POST" action="{{ route('password.confirm') }}">
                            @csrf

                            <div class="form-group">
                                <label for="password" class="small">{{ __('Password') }}</label>
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback small" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-dark btn-block">
                                {{ __('Confirm Password') }}
                            </button>

                            @if (Route::has('password.request'))
                                <div class="text-center mt-3">
                                    <a class="small" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                </div>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection