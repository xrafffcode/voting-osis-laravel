@extends('layouts.auth')

@section('content')
    <div class="row h-100">
        <div class="col-lg-5 col-12">
            <div id="auth-left">

                <h1 class="auth-title">Log in.</h1>
                <p class="auth-subtitle mb-5">Log in menggunakan data yang diberikan panitia.</p>

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group position-relative has-icon-left mb-4">
                        <input id="nis" type="number"
                            class="form-control form-control-xl @error('nis') is-invalid @enderror" name="nis"
                            value="{{ old('nis') }}" required autocomplete="nis" autofocus placeholder="Nis">
                        @error('nis')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="form-control-icon">
                            <i class="bi bi-person"></i>
                        </div>
                    </div>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input id="password" type="password"
                            class="form-control form-control-xl @error('password') is-invalid @enderror" name="password"
                            autocomplete="current-password" placeholder="Password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="form-control-icon">
                            <i class="bi bi-shield-lock"></i>
                        </div>
                    </div>
                    <div class="form-check form-check-lg d-flex align-items-end">

                        <input class="form-check-input me-2" type="checkbox" name="remember" id="remember"
                            {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label text-gray-600" for="flexCheckDefault">
                            Keep me logged in
                        </label>
                    </div>
                    <button class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Log in</button>
                </form>
                <div class="text-center mt-5 text-lg fs-4">
                    {{-- @if (Route::has('register'))
                        <p class="text-gray-600">Don't have an account? <a href="{{ route('register') }}"
                                class="font-bold">Sign
                                up</a>.</p>
                    @endif --}}

                    <p><a class="font-bold" href="{{ route('password.request') }}">Forgot password?</a>.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-7 d-none d-lg-block">
            <div id="auth-right">
                <img src="{{ asset('assets/images/saly_2.svg') }}" alt="" width="900">
            </div>
        </div>
    </div>
@endsection
