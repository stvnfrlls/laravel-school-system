@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-white text-center font-weight-bold">
                        {{ __('Verify Your Email Address') }}
                    </div>

                    <div class="card-body text-center">
                        @if (session('resent'))
                            <div class="alert alert-success small" role="alert">
                                {{ __('A fresh verification link has been sent to your email address.') }}
                            </div>
                        @endif

                        <p class="small text-muted">
                            Before proceeding, please check your email for a verification link.
                            If you did not receive the email:
                        </p>

                        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                            @csrf
                            <button type="submit" class="btn btn-dark">
                                {{ __('Resend Verification Email') }}
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection