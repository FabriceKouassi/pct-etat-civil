@extends('front.auth.layouts.__')
@section('title', $title )
@section('auth-content')

    <div class="form-container">

        <div class="logo" style="background-image: url('{{ asset('design/asset/img/logo.png') }}');"></div>

        <div id="login-form" class="form active">
            <h2>Restaurer votre mot de passe</h2>

            <form>
                <div class="input-group">
                    <label for="login-email">Adresse email</label>
                    <input type="email" id="login-email" placeholder="votre@email.com" required>
                </div>
                
                <button type="submit" class="btn-primary">Valider</button>
            </form>

            <div class="footer">
                Déjà un compte ? <a href="{{ route('front.auth') }}">Se connecter</a>
                <br> <a href="{{ route('front.home') }}">Retour au site</a>
            </div>
        </div>
        
    </div>

@endsection
    
        
