<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClientsModel extends Model
{
    protected $table = 'clients_table';
    protected $fillable = ['nom', 'prenom', 'telephone', 'mail'];
    public $timestamps = false;
}
