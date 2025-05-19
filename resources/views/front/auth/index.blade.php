@extends('front.auth.layouts.__')
@section('title', $title)
@section('auth-content')

    <div class="form-container">

        <div class="logo" style="background-image: url('{{ asset('design/asset/img/logo.png') }}');"></div>

        <div class="tabs">
            <div class="tab active" onclick="switchTab('login')">Connexion</div>
            <div class="tab" onclick="switchTab('register')">Inscription</div>
        </div>

        <div id="login-form" class="form active">
            <h2>Bienvenue</h2>

            {{-- <div class="social-login">
                <button class="social-btn" title="Connexion avec Google">
                    <i class="fab fa-google"></i>
                </button>
                <button class="social-btn" title="Connexion avec LinkedIn">
                    <i class="fab fa-linkedin-in"></i>
                </button>
                <button class="social-btn" title="Connexion avec Apple">
                    <i class="fab fa-apple"></i>
                </button>
            </div>

            <div class="divider">
                <span class="divider-text">ou continuer avec email</span>
            </div> --}}

            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="input-group">
                    <label for="login-email">Adresse email</label>
                    <input type="email" id="login-email" name="email" placeholder="votre@email.com" required>
                    @error('login-email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input-group">
                    <label for="login-password">Mot de passe</label>
                    <input type="password" id="login-password" name="password" placeholder="••••••••" required>
                    <i class="fas fa-eye password-toggle" onclick="togglePassword('login-password', this)"></i>
                    @error('login-password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="forgot-password">
                    <a href="{{ route("front.auth.restore") }}">Mot de passe oublié ?</a>
                </div>
                <button type="submit" class="btn-primary">Se connecter</button>
            </form>

            <div class="footer">
                Pas encore de compte ? <a href="#" onclick="switchTab('register')">S'inscrire</a>
                <br>
                <a href="{{ route('front.home') }}">Retour au site</a>
            </div>
        </div>

        <div id="register-form" class="form">
            <h2>Créer un compte</h2>

            {{-- <div class="social-login">
                <button class="social-btn" title="Inscription avec Google">
                    <i class="fab fa-google"></i>
                </button>
                <button class="social-btn" title="Inscription avec LinkedIn">
                    <i class="fab fa-linkedin-in"></i>
                </button>
                <button class="social-btn" title="Inscription avec Apple">
                    <i class="fab fa-apple"></i>
                </button>
            </div>

            <div class="divider">
                <span class="divider-text">ou s'inscrire avec email</span>
            </div> --}}

            <form action="{{ route('register') }}" method="POST">
                @csrf
                <div class="input-group">
                    <label for="register-name">Nom complet</label>
                    <input type="text" id="register-name" name="name" placeholder="Fabrice Ako" required>
                    @error('register-name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input-group">
                    <label for="register-email">Adresse email</label>
                    <input type="email" id="register-email" name="email" placeholder="votre@email.com" required>
                    @error('register-email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input-group">
                    <label for="register-password">Mot de passe</label>
                    <input type="password" id="register-password" name="password" placeholder="••••••••" required>
                    <i class="fas fa-eye password-toggle" onclick="togglePassword('register-password', this)"></i>
                    @error('register-password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input-group">
                    <label for="register-confirm">Confirmer le mot de passe</label>
                    <input type="password" id="register-confirm" name="confirm_password" placeholder="••••••••" required>
                    <i class="fas fa-eye password-toggle" onclick="togglePassword('register-confirm', this)"></i>
                </div>
                <button type="submit" class="btn-primary">S'inscrire</button>
            </form>

            <div class="footer">
                Déjà un compte ? <a href="#" onclick="switchTab('login')">Se connecter</a>
                <br> <a href="{{ route('front.home') }}">Retour au site</a>
            </div>
        </div>
    </div>

@endsection


