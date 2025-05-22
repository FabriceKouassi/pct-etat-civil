@extends('back.__.app')
@section('title', $title)
@section('content')
    @include('back.__.topbar')

    <div class="dashboard-content">
        <h2 class="page-name"> {{ $title }} </h2>
        <div class="filter-container">
            <div>
                <label for="search-name">Nom:</label>
                <input type="text" id="search-name" placeholder="Filtrer par nom" onkeyup="filterTable()">
            </div>
            <div>
                <label for="search-status">Statut:</label>
                <select id="search-status" onchange="filterTable()">
                    <option value="">Tous</option>
                    <option value="Vivant">Vivant</option>
                    <option value="Décédé(e)">Décédé(e)</option>
                </select>
            </div>
            <div>
                <a href="{{ route('declaration.citoyens.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Créer
                </a>
            </div>
        </div>

        <table id="data-table">
            <thead>
                <tr>
                    <th>Nom & prénoms</th>
                    <th>sexe</th>
                    <th>Statut</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($citoyens as $item)
                    <tr>
                        <td>{{ $item->nom }} {{ $item->prenoms }}</td>
                        <td>{{ $item->sexe }}</td>
                        <td>Vivant</td>
                        <td class="actions">
                            <form action="{{ route('declaration.citoyens.delete', ['citoyen' => $item->id ]) }}" method="POST" onsubmit="return confirm('Confirmer la suppression de {{ $item->nom }} {{ $item->prenoms }}?')">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('declaration.citoyens.updateForm', ['citoyen' => $item->id ]) }}" class="btn-edit">
                                    <i class="fas fa-pencil"></i>
                                </a>
                                <button type="submit" class="btn-delete"><i class="fas fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
