<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsersModel extends Model
{
    protected $table = 'users_table';
    protected $fillable = ['nom'];
    public $timestamps = false;

    public function user(){
        return $this->hasMany(ExchangesModel::class, 'id_user');
    }
}
