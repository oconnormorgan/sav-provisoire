<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeExchangesModel extends Model
{
    protected $table = 'type_exchanges_table';
    protected $fillable = ['type'];
    public $timestamps = false;

    public function type_exchange(){
        return $this->hasMany(ExchangesModel::class, 'id_type_exchange');
    }
}
