@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center ns-font-family">
        <div class="col-md-8">
            <div class="mt-3">
{{--                <div class="card-header">{{ __('Login') }}</div>--}}

                <a class="text-info offset-md-3" href="{{route('check')}}" >Back</a>

                <div class="mt-5">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">
                                {{ __('E-Mail Address') }}
                            </label>

                            <div class="col-md-6">
                                <input id="email"
                                       type="email"
                                       class="form-control
                                       @error('email') is-invalid @enderror"
                                       name="email"
                                       style='border-width:1px !important;'
                                       placeholder="Username"
                                       value="{{ old('email') }}"
                                       required autocomplete="email"
                                       autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">
                                {{ __('Password') }}
                            </label>

                            <div class="col-md-6">
                                <input id="password"
                                       type="password"
                                       class="form-control @error('password') is-invalid @enderror"
                                       name="password"
                                       placeholder="Password"
                                       required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input position-relative ml-1"
                                           type="checkbox"
                                           name="remember"
                                           id="remember"
                                           style=""
                                        {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label pl-1" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="ml-3" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
