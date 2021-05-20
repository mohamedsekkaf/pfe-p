<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reponse extends Model
{
    public $table="reponses";
    protected $fillable = [
        'id','id_chikaya','reponse','created_at','updated_at'
    ];
}
