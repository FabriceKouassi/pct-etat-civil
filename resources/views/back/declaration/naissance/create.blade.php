@extends('back.__.app')
@section('title', $title)
@section('content')
    @include('back.__.topbar')

    <div class="dashboard-content">
        <div class="d-flex">
            <h2 class="page-name"> {{ $title }} </h2>
            <a href="{{ route('declaration.naissance.all') }}" class="btn-back">
                <i class="fas fa-arrow-left"></i>
            </a>
        </div>
        <div class="container">
            <form id="form" method="POST" action="{{ Route('declaration.naissance.save') }}">
                @csrf
                <div class="form-row">
                    <div>
                        <label for="pere_id">Choisir le père</label>
                        <select id="pere_id" name="pere_id" required>
                            <option selected disabled>Sélectionner le père</option>
                            @foreach ($citoyens as $item)
                                <option value="{{ $item->id }}">{{ $item->code }} ( {{ $item->nom }} {{ $item->prenoms }} )</option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="mere_id">Choisir la mère</label>
                        <select id="mere_id" name="mere_id" required>
                            <option selected disabled>Sélectionner la mère</option>
                            @foreach ($citoyens as $item)
                                <option value="{{ $item->id }}">{{ $item->code }} ( {{ $item->nom }} {{ $item->prenoms }} )</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <em><strong><small>Informations de l'enfant</small></strong></em>
                </div>
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
