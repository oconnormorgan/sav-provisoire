@extends('layouts.app',['id'=>'client'])

@section('title', "Client")

@section('content')
<section class="m-4 d-flex justify-content-start flex-wrap">
    <div class="w-100 card text-black bg-light mb-5">
        <div class="card-header d-flex justify-content-start align-items-center">
            <div class="flex-grow-1">{{$client->nom}} {{$client->prenom}}</div>
        </div>
        <p class="card-text m-2">Numéro : {{$client->telephone}}</p>
        <p class="card-text m-2">E-mail : {{$client->mail}}</p>
    </div>
    <div class="card-deck row row-cols-1 row-cols-md-3">
        <div class="col mb-3 d-flex justify-content-center align-items-center">
            <button class="btn btn-outline-secondary rounded-circle"><i class="fas fa-plus fa-5x" data-toggle="modal" data-target="#ModalExchange"></i></button>
        </div>
        @foreach($exchanges as $exchange)
        <div class="col mb-3">
            <div class="card h-100 text-black bg-light">
                <div class="card-header">
                    <div>{{$exchange->date}}</div>
                </div>
                <div class="card-body">
                    <p class="card-text m-1">{{$exchange->commentaire}}</p>
                </div>
                <div class="card-footer">
                    <small class="d-flex justify-content-center">{{$exchange->user->nom}} - par {{$exchange->typeExchange->type}}</small>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
<div class="modal fade" id="ModalExchange" tabindex="-1" role="dialog" aria-labelledby="ModalExchangeTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <form class="modal-content w-100" method="POST" action="/1">
        {{ csrf_field() }}
            <div class="modal-header">
                <h5 class="modal-title" id="ModalExchangeTitle">Échange</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <p class="m-2">Client : {{$client->nom}} {{$client->prenom}}</p>
                <input name="id_client" type="client" class="form-control d-none" value="{{$client->id}}">

                <div class="m-2">
                    <label for="InputUser">Opératrice :</label>
                    <select class="form-control" id="InputUser">
                        @foreach($users as $user)
                        <option value="{{$user->id}}" name="id_user">{{$user->nom}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="m-2">
                    <label for="InputTypeEchange">Type d'échange :</label>
                    <select class="form-control" id="InputTypeEchange">
                        @foreach($typeExchanges as $typeExchange)
                        <option value="{{$typeExchange->id}}" name="id_type_exchange">{{$typeExchange->type}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="m-2">
                    <label for="InputCommentaire">Commentaire</label>
                    <textarea type="commentaire" name="commentaire" class="form-control" style="height: 150px;" id="InputCommentaire"></textarea>
                </div>

                <div class="m-2">
                    <label for="InputDate">Date</label>
                    <input type="dateTime" name="date" class="form-control" id="InputDate">
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <button type="submit" class="btn btn-primary">Sauvegarder l'échange</button>
            </div>
        </form>
    </div>
</div>

</html>
@endsection