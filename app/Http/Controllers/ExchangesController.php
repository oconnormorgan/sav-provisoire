<?php

namespace App\Http\Controllers;

use App\ClientsModel;
use App\ExchangesModel;
use App\Http\Resources\ExchangesResource;
use App\TypeExchangesModel;
use App\UsersModel;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;
use Illuminate\Support\Facades\Validator;

class ExchangesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $dataExchanges = Validator::make(
        //     $request->input(),
        //     [
        //         'date' => 'required',
        //         'commentaire' => 'required',
        //         'id_type_exchange' => 'required',
        //         'id_client' => 'required',
        //         'id_user' => 'required',

        //     ]
        // )->validate();

        $dataExchanges = [
            'date' => $request->input('date'),
            'commentaire' => $request->input('commentaire'),
            'id_type_exchange' => $request->input('id_type_exchange'),
            'id_client' => $request->input('id_client'),
            'id_user' => $request->input('id_user'),
        ];
        //Ajout en bdd des données validées par le validator
        $exchanges = ExchangesModel::create($dataExchanges);

        //Retourne le circuit formaté grace à la ressource
        $redirect =  new ExchangesResource($exchanges);

        return redirect('/')->with('redirect', $redirect);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = ClientsModel::find($id);
        $users = UsersModel::get();
        $typeExchanges = TypeExchangesModel::get();
        $exchanges = ExchangesModel::where('id_client', '=', $id)->orderBy('date', 'DESC')->get(); //prepare la connections
        $exchangeData = ExchangesResource::collection($exchanges);

        return view('clients.client', ['client' => $client, 'exchanges' => $exchangeData, 'users' => $users, 'typeExchanges' => $typeExchanges]); //renvoie les données
        // return $exchangeData;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
