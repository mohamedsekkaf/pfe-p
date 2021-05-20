<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Etat extends Model
{
    public $table="etats";
    protected $fillable = [
        'id','id_chikaya','etat','created_at','updated_at'
    ];
}
