<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projet extends Model
{
    protected $primaryKey = 'id_langue';


    protected $fillable = [
        'intitule','domaine','localisation','description','budget','motivation','delai_realisation',

                ];
}
