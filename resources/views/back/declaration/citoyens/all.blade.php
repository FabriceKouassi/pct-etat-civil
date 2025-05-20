@extends('back.__.app')
@section('title', $title)
@section('content')
    @include('back.__.topbar')

    <div class="dashboard-content">
        <h2 class="page-name"> {{ $title }} </h2>
    </div>

@endsection
