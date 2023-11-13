@extends('layouts.app')

@section('content')
<section class="auth-form-section">
    <div class="auth-page-header">
        <a href="{{route('home')}}" class="logo">
            <img src="{{ asset('assets/images/logo/ehaa.png')}}" alt="logo">
        </a>
        <a href="{{route('home')}}" class="back-link"><span class="iconify" data-icon="material-symbols:arrow-back-rounded"></span> Page d'accueil</a>
    </div>
    <div class="auth-content">
        <h2>Connexion</h2>
        <h4 class="dm-sans">Bienvenue sur Ehaa-Pay 👋</h4>
        <form>
            <label>E-mail</label>
            <input type="email" placeholder="e.g.  example@mail.com">
    
            <label>Mot de passe</label>
            <input type="password" placeholder="********">
    
            <button type="submit" class="form-success-btn">Se connecter</button>
    
            <a href="forgot-password.html" class="auth-link mt-3">Mot de passe oublié ?</a>
            <p class="mt-3">Vous n'avez pas de compte ? <a href="">S'inscrire !</a></p>
            {{-- <p class="mb-0">By signing in, you agree to our <a href="terms-of-services.html">Terms</a> & <a href="#">Privacy Policy.</a></p> --}}
        </form>
    </div>
</section>
<section class="auth-right-section">
    {{-- <img src="{{ asset('assets/images/auth-and-utility/auth-bg.png')}}" alt="img" />  --}}
    <video loop="" autoplay="" playsinline="" muted="">
        <source src="{{ asset('assets/vimeo/vimeo-prod-skyfire-std-us/01/424/22/2611867576.mp4')}}" type="video/mp4">
    </video>

    <div class="auth-brand-slider-section">
        <div class="auth-brand-slider-inner">
            <h5>Facilitez vos paiements en ligne avec Ehaa-Pay 😍</h5>
            {{-- <div class="auth-brand-slider">
                <ul>
                    <li><img src="{{ asset('assets/images/brands/auth1.svg')}}" alt="img"></li>
                    <li><img src="{{ asset('assets/images/brands/auth2.svg')}}" alt="img"></li>
                    <li><img src="{{ asset('assets/images/brands/auth3.svg')}}" alt="img"></li>
                    <li><img src="{{ asset('assets/images/brands/auth4.svg')}}" alt="img"></li>
                    <li><img src="{{ asset('assets/images/brands/auth5.svg')}}" alt="img"></li>
                </ul>
            </div> --}}
        </div>
    </div>

</section>
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
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
</div> --}}
@endsection
