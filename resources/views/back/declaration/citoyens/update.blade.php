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
            <form id="form" method="POST" action="{{ Route('declaration.citoyens.update') }}">
                @csrf
                @method('PATCH')
                <input type="hidden" value="{{ $citoyen->id }}" name="id">
                <div class="form-row">
                    <div>
                        <label for="nom">Nom</label>
                        <input type="text" id="nom" name="nom" placeholder="Entrez votre nom" required value="{{ $citoyen->nom }}">
                    </div>
                    <div>
                        <label for="prenoms">Prénoms</label>
                        <input type="text" id="prenoms" name="prenoms" placeholder="Entrez votre prénoms" required value="{{ $citoyen->prenoms }}">
                    </div>
                    <div>
                        <label for="email">sexe</label>
                        <select id="sexe" name="sexe" required>
                            <option value="masculin" {{ $citoyen->sexe === 'masculin' ? 'selected' : '' }}>Masculin</option>
                            <option value="feminin" {{ $citoyen->sexe === 'feminin' ? 'selected' : '' }}>Feminin</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div>
                        <label for="date_naissance">Date de naissance</label>
                        <input type="date" id="date_naissance" name="date_naissance" placeholder="Entrez votre date de naissance" required value="{{ $citoyen->date_naissance }}">
                    </div>
                    <div>
                        <label for="lieu_naissance">Lieu de naissance</label>
                        <input type="text" id="lieu_naissance" name="lieu_naissance" placeholder="Entrez votre lieu de naissance" required value="{{ $citoyen->lieu_naissance }}">
                    </div>
                </div>

                <button type="submit" class="submit-btn">Enregistrer</button>
            </form>
        </div>
    </div>
@endsection
