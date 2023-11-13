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
        <div class="auth-content">
            <h2>Hello!</h2>
            <h4 class="dm-sans">Le lien de réinitialisation sera envoyé à votre adresse e-mail.📨</h4>
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <label>E-mail</label>
                <input name="email" type="email" class="@error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="e.g.  example@mail.com" required autofocus autocomplete="username">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <button type="submit" class="form-primary-btn">Envoyez-moi un mail de réinitialisation</button>

                <p class="mt-5">Vous vous souvenez de votre mot de passe ? <a href="{{route('login')}}">Connectez-vous maintenant !</a></p>
            </form>
        </div>
    </div>
</section>
<section class="auth-right-section">
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
