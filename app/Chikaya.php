<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chikaya extends Model
{
    public $table="chikayas";
    protected $fillable = [
        'id','nom','prenom','cin','telephone','email','addresse',
        'region','province','nom_departement',
        'reclamation','texte_reclamation',
        'check'
    ];





}
