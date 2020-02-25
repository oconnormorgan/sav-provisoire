@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
<section class="m-3 d-flex flex-column">
    <h2>Liste des clients : </h2>
    <div class="d-flex flex-row justify-content-center flex-wrap">
        @foreach($clients as $client)
        <div class="m-2 p-2 w-100 card text-black bg-light mb-3" style="max-width: 18rem;">

            <div class="card-body d-flex flex-column">
                <p class="card-text">{{$client->nom}}</p>
                <p class="card-text">{{$client->prenom}}</p>
                <p class="card-text d-flex justify-content-end"><a href="{{$client->id}}" class="text-black">Détails</a></p>
            </div>
        </div>
        @endforeach
    </div>
</section>

</html>
@endsection