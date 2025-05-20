@extends('back.__.app')
@section('title', $title)
@section('content')
    @include('back.__.topbar')

    <div class="dashboard-content">
        <div class="d-flex">
            <h2 class="page-name"> {{ $title }} </h2>
            <a href="{{ route('declaration.citoyens.all') }}" class="btn-back">
                <i class="fas fa-arrow-left"></i>
            </a>
        </div>
        <div class="container">
            <form id="form" method="POST" action="{{ Route('declaration.citoyens.save') }}">
                @csrf
                <div class="form-row">
                    <div>
                        <label for="nom">Nom</label>
                        <input type="text" id="nom" name="nom" placeholder="Entrez votre nom" required>
                    </div>
                    <div>
                        <label for="prenoms">Prénoms</label>
                        <input type="text" id="prenoms" name="prenoms" placeholder="Entrez votre prénoms" required>
                    </div>
                    <div>
                        <label for="email">sexe</label>
                        <select id="sexe" name="sexe" required>
                            <option selected disabled>Sélectionner un statut</option>
                            <option value="masculin">Masculin</option>
                            <option value="feminin">Feminin</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div>
                        <label for="date_naissance">Date de naissance</label>
                        <input type="date" id="date_naissance" name="date_naissance" placeholder="Entrez votre date de naissance" required>
                    </div>
                    <div>
                        <label for="lieu_naissance">Lieu de naissance</label>
                        <input type="text" id="lieu_naissance" name="lieu_naissance" placeholder="Entrez votre lieu de naissance" required>
                    </div>
                </div>

                <button type="submit" class="submit-btn">Enregistrer</button>
            </form>
        </div>
    </div>
@endsection
