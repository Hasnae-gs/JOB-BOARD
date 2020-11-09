<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $primaryKey = 'id_experience';

    
    protected $fillable = [
        'date','poste','type_contrat','domaine','entreprise','id_candidat',   
                    
                
                   
                ];
}
