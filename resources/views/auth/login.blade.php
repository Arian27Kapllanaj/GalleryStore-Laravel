@extends('layouts.auth')

<div class="row h-100" id="app">
    <div class="col-md-6 d-flex justify-content-center auth-col-form">
        <div class="d-flex flex-column justify-content-center w-75">
            <div class="d-flex flex-grow-1 flex-column justify-content-center pb-5">
                <div class="text-center">
                    <h3 class="mb-1">{{ __('Good') }} <span id="datetime"></span>{{ __('! Welcome back') }}</h3>
                    <script>
                        const today = new Date();
                        const curHr = today.getHours();
                        let time;

                        if (curHr > 5 && curHr < 12) {
                            time = "Morning";
                        } else if (curHr > 11 && curHr < 18) {
                            time = "Afternoon";
                        } else if (curHr > 17 && curHr < 24) {
                            time = "Evening";
                        } else if (curHr > 23 || curHr < 6) {
                            time = "Night";
                        }

                        document.getElementById('datetime').innerText = time;
                    </script>
                    <p class="mb-4">{{ __('Enter your details below here') }}</p>
                </div>

                <form class="w-100" method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group">
                        <input placeholder="Email Address" id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                        @error('username')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <div class="auth-password-field">
                            <input placeholder="Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Password?') }}
                                </a>
                            @endif
                        </div>

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">
                            {{ __('Login') }}
                        </button>
                    </div>
                </form>
            </div>

            <div class="auth-footer text-center pb-3">
                {{ __('Don\'t have account yet?') }}
                @if (Route::has('register'))
                    <a href="{{ route('register') }}"><b>{{ __('Sign up Now') }}</b></a>
                @endif
            </div>
        </div>
    </div>
    <app-carousel></app-carousel>
</div>
