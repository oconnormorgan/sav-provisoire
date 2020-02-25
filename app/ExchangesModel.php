<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExchangesModel extends Model
{
    protected $table = 'exchanges_table';
    protected $fillable = ['date', 'commentaire'];
    public $timestamps = false;
}
