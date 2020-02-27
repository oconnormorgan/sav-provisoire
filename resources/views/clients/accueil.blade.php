@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
<section class="m-3 d-flex flex-column">
    <h2>Liste des clients : </h2>
    <div class="d-flex flex-row justify-content-center flex-wrap">
        @foreach($clients as $client)
        <div class="m-2 w-100 card text-black bg-light mb-3" style="max-width: 18rem;">
            <div class="card-header d-flex justify-content-start align-items-center">
                <div class="flex-grow-1">{{$client->nom}} {{$client->prenom}}</div>
                <a href="{{$client->id}}" class="rounded-circle text-secondary"><i class="fas fa-info-circle fa-2x"></i></a>
            </div>
        </div>
        @endforeach
    </div>
</section>

</html>
@endsection