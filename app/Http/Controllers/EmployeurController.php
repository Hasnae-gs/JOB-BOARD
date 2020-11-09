<?php

namespace App\Http\Controllers;
use Auth;
use DB;
use App\User;
use App\Employeur;
use App\Offre;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class EmployeurController extends Controller
{

    public function inf($id){
        $data=DB::table('employeurs')
        ->where('id','=',$id)

            ->select(
                'employeurs.logo',
                'employeurs.id',
                'employeurs.identifiant',
                'employeurs.raison_sosial',
                'employeurs.type_entreprise',
                'employeurs.secteur',
                'employeurs.ville',
                'employeurs.tele',
                'employeurs.site',
                'employeurs.poste',
                'employeurs.coordonnees',
                'employeurs.description',
                'employeurs.politique',
                'employeurs.accessibilite',
               
            )
            ->get();

            $dt=DB::table('employeurs')
            ->join('offres','employeurs.id','=','offres.id_employeur')
            ->where('id','=',$id)
            ->select(
                'offres.id_offre',
                'offres.date_depot',
                'offres.descriptif_poste' , 
                'offres.niveau_etude',
                'offres.domaine',
                'offres.niveau_experience',
                'offres.competence',
                'offres.qualite',
                'offres.langue',
                'offres.adresse',
                'offres.ville',
                'offres.region',
                'offres.poste_cadre',
                'offres.type_contrat', 
                'offres.debut_mission',
                'offres.procedure',
                'offres.id_offre'
            )
            ->get();

            return view('plusentreprises', compact('data','dt'));
}
          
public function Profil(){
    $id= Auth::guard('employeur')->user()->id;
    $data=DB::table('employeurs')
        ->select(
            'employeurs.name',
            'employeurs.prenom',
            'employeurs.email',
            'employeurs.password',
            'employeurs.logo',
            'employeurs.id',
            'employeurs.identifiant',
            'employeurs.raison_sosial',
            'employeurs.type_entreprise',
            'employeurs.secteur',
            'employeurs.ville',
            'employeurs.tele',
            'employeurs.site',
            'employeurs.poste',
            'employeurs.coordonnees',
            'employeurs.description',
            'employeurs.politique',
            'employeurs.accessibilite',
        )
        ->where('id','=',$id)
        ->get();
        return view('Profil',['job'=>$data]);
}

public function modifier(){
    $id= Auth::guard('employeur')->user()->id;
    $ann= DB::table('employeurs')
    ->where('id',$id)
    ->first(); 
return view('modifier',['employeurs'=>$ann]);


}

    
public function updateinfo(Request $request){
    $id= Auth::guard('employeur')->user()->id;
    $employeur= employeur::where('id',$id)->first();
    $employeur->name=$request->input('name');
    $employeur->prenom = $request->input('prenom');
    $employeur->email = $request->input('email');
    $employeur->password = $request->input('password');
    $employeur->logo = $request->input('logo');
    $employeur->identifiant = $request->input('identifiant');
    $employeur->raison_sosial = $request->input('raison_sosial');
    $employeur->type_entreprise = $request->input('type_entreprise');
    $employeur->secteur = $request->input('secteur');
    $employeur->tele = $request->input('tele');
    $employeur->ville = $request->input('ville');
    $employeur->site = $request->input('site');
    $employeur->poste = $request->input('poste');
    $employeur->coordonnees = $request->input('coordonnees');
    $employeur->description = $request->input('description');
    $employeur->politique = $request->input('politique');
    $employeur->accessibilite = $request->input('accessibilite');

    $employeur->save();
    return redirect()->route('Profil')->with('message', 'info bien modifiée');    
}




public function supprimer ()
{
    $id= Auth::guard('employeur')->user()->id;

    employeur::destroy($id);
    return redirect()->intended('login/employeur');

}


}





