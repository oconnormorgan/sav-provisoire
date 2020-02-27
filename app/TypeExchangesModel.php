<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeExchangesModel extends Model
{
    protected $table = 'type_exchange_table';
    protected $fillable = ['type'];
    public $timestamps = false;

    public function typeExchange(){
        return $this->hasMany(ExchangesModel::class, 'id_type_exchange');
    }
}
