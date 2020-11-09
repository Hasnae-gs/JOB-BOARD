<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    protected $primaryKey = 'id_demande';


    protected $fillable = [
        'id_offre','id_candidat',
                ];
}
