<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    
    protected $primaryKey = 'id_formation';

    protected $fillable = [
        'date','intitule','niveau','etablissement',
                    
                
                   
                ];

}
