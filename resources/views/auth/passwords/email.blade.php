@extends('layouts.auth')

<div class="row h-100" id="app">
    <div class="col-md-6 d-flex justify-content-center auth-col-form">
        <div class="d-flex flex-column justify-content-center w-75">
            <div class="d-flex flex-grow-1 flex-column justify-content-center pb-5">
                <div class="text-center">
                    <h3 class="mb-1">{{ __('Quick access recovery') }}</h3>
                    <p class="mb-4">{{ __('Enter your details below here') }}</p>
                </div>

                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

                    <div class="form-group">
                        <input placeholder="Email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">
                            {{ __('Send Password Reset Link') }}
                        </button>
                    </div>
                </form>
            </div>

            <div class="auth-footer text-center pb-3">
                {{ __('Remember your account?') }}
                @if (Route::has('login'))
                    <a href="{{ route('login') }}"><b>{{ __('Sign in') }}</b></a>
                @endif
            </div>
        </div>
    </div>
    <app-carousel></app-carousel>
</div>
