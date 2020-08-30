@extends('layouts.front')

@section('title', 'Login')

@section('main-content')
<x-front.form-loader />
<main>
    <section class="vh-100 d-flex align-items-center section-image overlay-soft-dark" data-background="{{ asset('assets/img/blog/image-3.jpg') }}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="signin-inner mt-3 mt-lg-0 bg-white shadow-soft border rounded border-light p-4 p-lg-5 w-100 fmxw-500">
                        <div class="text-center text-md-center mb-4 mt-md-0">
                            <h1 class="mb-0 h3">Bem-vindo de volta!</h1>
                        </div>
                        <x-front.alert />
                        <form action="{{ url("$url/login") }}" method="POST" class="form-loader mt-4">
                            @csrf

                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text"><i class="far fa-user"></i></span></div><input type="email" name="email" class="form-control" id="input-email" placeholder="Endereço de e-mail" required value="{{ old('email') }}"></div>
                                </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-unlock-alt"></i></span></div><input class="form-control" name="password" placeholder="Senha" type="password" required>
                                    <div class="input-group-append"><span class="input-group-text"><i class="far fa-eye"></i></span></div>
                                </div>
                                <div class="d-block d-sm-flex justify-content-between align-items-center mt-2">
                                    <div class="form-group form-check mt-3"><input type="checkbox" name="remember" class="form-check-input" id="exampleCheck1"> <label class="form-check-label form-check-sign-white" for="exampleCheck1">Mantenha-me conectado</label></div>
                                    <div><a href="{{ url('forgot-password.html') }}" class="small text-right">Esqueceu sua senha?</a></div>
                                </div>
                            </div>
                            <div class="mt-3"><button type="submit" class="btn btn-block btn-primary">Entrar</button></div>
                        </form>
                        <div class="d-block d-sm-flex justify-content-center align-items-center mt-4"><span class="font-weight-normal">Não tem uma conta? <a href="{{ route('home.index') }}" class="font-weight-bold">Solicite uma gratuita</a></span></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

{{--


@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ isset($url) ? ucwords($url) : ""}} {{ __('Login') }}</div>

                <div class="card-body">
                    @isset($url)
                    <form method="POST" action='{{ url("$url/login") }}' aria-label="{{ __('Login') }}">
                    @else
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                    @endisset
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

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
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
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
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
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
--}}
