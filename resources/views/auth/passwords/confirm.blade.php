@extends('layouts.auth')

<div class="row h-100" id="app">
    <div class="col-md-6 d-flex justify-content-center auth-col-form">
        <div class="d-flex flex-column justify-content-center w-75">
            <div class="d-flex flex-grow-1 flex-column justify-content-center pb-5">
                <div class="text-center">
                    <h3 class="mb-1">{{ __('Please confirm your password before continuing.') }}</h3>
                </div>

                <form method="POST" action="{{ route('password.confirm') }}">
                    @csrf

                    <div class="form-group">
                        <input placeholder="Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">
                            {{ __('Confirm Password') }}
                        </button>

                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
    <app-carousel></app-carousel>
</div>

