@extends('layouts.auth')

<div class="row h-100" id="app">
    <div class="col-md-6 d-flex justify-content-center auth-col-form">
        <div class="d-flex flex-column justify-content-center w-75">
            <div class="d-flex flex-grow-1 flex-column justify-content-center pb-5">
                <div class="text-center">
                    <h3 class="mb-1">{{ __('Let\'s start a journey!') }}</h3>
                    <p class="mb-4">{{ __('Enter your details below here') }}</p>
                </div>

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="form-group">
                        <input placeholder="Name" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input placeholder="Username" id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                        @error('username')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input placeholder="Email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input placeholder="Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <input placeholder="Password Repeat" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">
                            {{ __('Register') }}
                        </button>
                    </div>
                </form>
            </div>

            <div class="auth-footer text-center pb-3">
                {{ __('Already have account?') }}
                @if (Route::has('login'))
                    <a href="{{ route('login') }}"><b>{{ __('Sign in') }}</b></a>
                @endif
            </div>
        </div>
    </div>
    <app-carousel></app-carousel>
</div>
