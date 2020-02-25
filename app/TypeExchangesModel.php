<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeExchangesModel extends Model
{
    protected $table = 'type_exchanges_table';
    protected $fillable = ['type'];
    public $timestamps = false;
}
