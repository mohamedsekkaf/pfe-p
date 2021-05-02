<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chikaya extends Model
{
    public $table="chikayas";
    protected $fillable = [
        'id','name','firstname','cin', 'email', 'sujet_principal','objet','message',
    ];
}
