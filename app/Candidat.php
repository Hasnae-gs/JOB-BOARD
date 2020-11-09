<?php

namespace App;
use Illuminate\Notifications\Notifiable;
    use Illuminate\Foundation\Auth\User as Authenticatable;

    class Candidat extends Authenticatable
    {
        use Notifiable;

        protected $guard ='candidat';

        protected $fillable = [
'name', 'email', 'password','prenom','civilite','cin','ddn','adresse','ville','region','type_handicape','tele','mobilite_geographique',
'competences_informatiques','photo','CV','lettre_motivation','description','nad','domaine',
           
            
        
           
        ];

        protected $hidden = [
            'password', 'remember_token',
        ];
    }