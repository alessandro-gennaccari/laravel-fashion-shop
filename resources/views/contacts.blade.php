@extends('layouts.app')
@section('title', 'Contact')

@section('content')
<main class="p-5">
    <h1 class="text-center">Contact</h1>
    
    <div class="container p-5 text-center">
        <p>Potete trovarci in: {{$indirizzo}}</p>
        <p>Contattaci al: {{$numero}}</p>
        <p>Scrivici a: {{$email}}</p>
    </div>

</main>
@endsection