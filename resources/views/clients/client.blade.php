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
    @foreach($exchanges as $exchange)
    <div class="m-2 p-2 w-100 card text-black bg-light mb-3" style="max-width: 18rem;">

        <div class="card-body d-flex flex-column">
            <p class="card-text">{{$exchange->date}}</p>
            <p class="card-text">{{$exchange->commentaire}}</p>
            <p class="card-text">{{$exchange->id_type_exchange}}</p>
            <p class="card-text">{{$exchange->id_user}}</p>
        </div>
    </div>
    @endforeach
</section>

</html>
@endsection