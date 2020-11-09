<?php

namespace App;
use Illuminate\Notifications\Notifiable;
    use Illuminate\Foundation\Auth\User as Authenticatable;

    class Employeur extends Authenticatable
    {
        use Notifiable;

        protected $guard = 'employeur';

        protected $fillable = [
            'name', 'email', 'password','prenom','identifiant','raison_sosial','type_entreprise','secteur','effectif','ville','tele','site','poste','coordonnees','logo','description','nbr_handicap','politique','accessibilite',
        ];

        protected $hidden = [
            'password', 'remember_token',
        ];
    }