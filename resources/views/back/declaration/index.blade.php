@extends('back.__.app')
@section('title', $title)
@section('content')
    @include('back.__.topbar')
    <div class="dashboard-content">
        <h2 class="page-name"> {{ $title }} </h2>
        <div class="card-main">
            <div class="card-item">
                <h3>Citoyens</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam quos consequuntur ex. Dolorum corporis quam voluptatum tempore est autem fugiat iste accusantium quas architecto, id rerum laboriosam dicta! Dolor, nostrum.
                </p>
                <a href="#">Valider</a>
            </div>
            <div class="card-item">
                <h3>Naissances</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam quos consequuntur ex. Dolorum corporis quam voluptatum tempore est autem fugiat iste accusantium quas architecto, id rerum laboriosam dicta! Dolor, nostrum.
                </p>
                <a href="#">Valider</a>
            </div>
            <div class="card-item">
                <h3>Mariages</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam quos consequuntur ex. Dolorum corporis quam voluptatum tempore est autem fugiat iste accusantium quas architecto, id rerum laboriosam dicta! Dolor, nostrum.
                </p>
                <a href="#">Valider</a>
            </div>
            <div class="card-item">
                <h3>Décès</h3>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam quos consequuntur ex. Dolorum corporis quam voluptatum tempore est autem fugiat iste accusantium quas architecto, id rerum laboriosam dicta! Dolor, nostrum.
                </p>
                <a href="#">Valider</a>
            </div>

        </div>
    </div>
@endsection
