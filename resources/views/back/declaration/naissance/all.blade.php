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
                <a href="{{ route('declaration.naissance.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus"></i> Créer
                </a>
            </div>
        </div>

        <table id="data-table">
            <thead>
                <tr>
                    <th>Code</th>
                    <th>Enfant</th>
                    <th>Pere</th>
                    <th>Mere</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($naissance as $item)
                    <tr>
                        <td>{{ $item->code }}</td>
                        <td>{{ $item->naissance_enfant->nom ?? '' }} {{ $item->naissance_enfant->prenoms ?? '' }}</td>
                        <td>{{ $item->naissance_pere->nom ?? '' }} {{ $item->naissance_pere->prenoms ?? '' }}</td>
                        <td>{{ $item->naissance_mere->nom ?? '' }} {{ $item->naissance_mere->prenoms ?? '' }}</td>
                        <td class="actions">
                            <form action="{{ route('declaration.naissance.delete', ['naissance' => $item->id ]) }}" method="POST" onsubmit="return confirm('Confirmer la suppression de {{ $item->nom }} {{ $item->prenoms }}?')">
                                @csrf
                                @method('DELETE')
                                <a href="#" class="btn-download">
                                    <i class="fas fa-download"></i>
                                </a>
                                <a href="{{ route('declaration.naissance.updateForm', ['naissance' => $item->id ]) }}" class="btn-edit">
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
