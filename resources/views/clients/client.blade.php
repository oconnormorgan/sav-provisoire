@extends('layouts.app',['id'=>'client'])

@section('title', "Client")

@section('content')
<section class="m-3 d-flex flex-row justify-content-center flex-wrap">
    <div class="m-2 p-2 card text-black bg-light mb-3 w-100 h-100">
        <div class="card-body d-flex flex-column">
            <p class="card-text">{{$client->nom}}</p>
            <p class="card-text">{{$client->prenom}}</p>
            <p class="card-text">Numéro : {{$client->telephone}}</p>
            <p class="card-text">E-mail : {{$client->mail}}</p>
        </div>
    </div>
</section>

</html>
@endsection