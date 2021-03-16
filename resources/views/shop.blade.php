@extends('layouts.app')
@section('title', 'Shop')

@section('content')
<main class="p-5">
    <h1 class="text-center">Dress Shop</h1>


    <div class="row row-cols-1 row-cols-md-3 p-5">
        @foreach ($dress as $value)
        <div class="col mb-4">
            <div class="card h-100">
                <div class="card-body bg-light">
                    <h5 class="card-title text-uppercase">{{ $value->name }}</h5>
                    <p class="card-text">Tessuto: {{ $value->fabric }} - Colore: {{ $value->color }}</p>
                    <p class="card-text">Taglia: <span class="text-uppercase">{{ $value->size }}</span></p>
                    <p class="card-text"><small class="text-dark font-weight-bold">&#x20AC; {{ $value->price }}</small></p>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</main>
@endsection