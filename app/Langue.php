<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Langue extends Model
{
    protected $primaryKey = 'id_langue';


    protected $fillable = [
        'Langue','niveau','id_candidat',
                   
                ];
}
