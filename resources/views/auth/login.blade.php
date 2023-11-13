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
        <form action="{{route('login.authenticate')}}" method="POST">
            @csrf
            <label>E-mail</label>
            <input name="email" type="email" class="@error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="e.g.  example@mail.com" required autofocus autocomplete="username">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            <label>Mot de passe</label>
            <input name="password" class="@error('email') is-invalid @enderror" value="{{ old('password') }}"  type="password" placeholder="********" required autocomplete="current-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
    
            <button type="submit" class="form-success-btn">Se connecter</button>
            @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}" class="auth-link mt-3">Mot de passe oublié ?</a>
            @endif
            <p class="mt-3">Nouveau ici ? <a href="">Créez un compte</a></p>
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
        </div>
    </div>

</section>
@endsection
