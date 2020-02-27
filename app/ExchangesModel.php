<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExchangesModel extends Model
{
    protected $table = 'exchanges_table';
    protected $fillable = ['date', 'commentaire', 'id_type_exchange', 'id_client', 'id_user'];
    public $timestamps = false;

    public function typeExchange(){
        return $this->belongsTo(TypeExchangesModel::class, 'id_type_exchange');
    }
    public function client(){
        return $this->belongsTo(ClientsModel::class, 'id_client');
    }
    public function user(){
        return $this->belongsTo(UsersModel::class, 'id_user');
    }
}
