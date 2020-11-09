<?php

namespace App\Http\Controllers;
use Auth;
use DB;
use App\User;
use App\Offre;
use App\Employeur;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class OffreController extends Controller
{
    public function save(Request $request ){
        $id= Auth::guard('employeur')->user()->id;
        $offre = new Offre();
        $offre->nref=$request->input('nref');
    	$offre->date_depot = $request->input('date_depot');
    	$offre->descriptif_poste = $request->input('descriptif_poste');
		$offre->niveau_etude = $request->input('niveau_etude');
		$offre->domaine = $request->input('domaine');
		$offre->niveau_experience = $request->input('niveau_experience');
        $offre->competence = $request->input('competence');
    	$offre->qualite = $request->input('qualite');
		$offre->langue = $request->input('langue');
		$offre->adresse = $request->input('adresse');
    	$offre->ville = $request->input('ville');
    	$offre->region = $request->input('region');
    	$offre->poste_cadre = $request->input('poste_cadre');
    	$offre->type_contrat = $request->input('type_contrat');
    	$offre->debut_mission = $request->input('debut_mission');
    	$offre->procedure = $request->input('procedure');
        $offre->id_employeur=$id;

      
        $offre->save();
        return redirect()->back()->with('message', 'offre bien ajouter');
    
    }

    

    public function MyIndex(){
        $id= Auth::guard('employeur')->user()->id;
        $data=DB::table('employeurs')
            ->join('offres','employeurs.id','=','offres.id_employeur')
            ->where('employeurs.id',$id)
            ->select('offres.nref',
            'employeurs.logo as image',
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
            'offres.id_offre')
            
            ->orderBy('id', 'DESC')->take(20)->get();
                           return view('offres.mesOffres',['job'=>$data]);
        }



        public function edit($id){
            $ann= DB::table('offres')
            ->where('id_offre',$id)
            ->first(); 
        return view('offres.editOffres',['offre'=>$ann]);

    
        }

    public function update(Request $request, $id){
        $offre= Offre::where('id_offre',$id)->first();
        $offre->nref=$request->input('nref');
    	$offre->date_depot = $request->input('date_depot');
    	$offre->descriptif_poste = $request->input('descriptif_poste');
		$offre->niveau_etude = $request->input('niveau_etude');
		$offre->domaine = $request->input('domaine');
		$offre->niveau_experience = $request->input('niveau_experience');
        $offre->competence = $request->input('competence');
    	$offre->qualite = $request->input('qualite');
		$offre->langue = $request->input('langue');
		$offre->adresse = $request->input('adresse');
    	$offre->ville = $request->input('ville');
    	$offre->region = $request->input('region');
    	$offre->poste_cadre = $request->input('poste_cadre');
    	$offre->type_contrat = $request->input('type_contrat');
    	$offre->debut_mission = $request->input('debut_mission');
    	$offre->procedure = $request->input('procedure');
        $offre->id_employeur=$id;
        $offre->save();
        return redirect()->route('mesOffres')->with('message', 'offre bien modifiée');    
    }
    public function destroy ($id)
    {
        offre::destroy($id);
        return redirect()->route('mesOffres')->with('message', 'offre bien supprimer');    
    }




    function searchofrg(Request $request){
        $search=$request->search; 
        $data=DB::table('offres')   
              ->where('offres.region','LIKE','%'.$request->search.'%')
                        
            ->select(
                'offres.id_offre',
                'offres.type_contrat',
                'offres.descriptif_poste',
                'offres.niveau_experience' , 
                'offres.region',
                'offres.date_depot',

            )
            ->get();
      return view('searchofrg',compact('data'));


    }





    public function plus($id){
 
        $data=DB::table('offres')
        ->join('employeurs','employeurs.id','=','offres.id_employeur')
        ->where('id_offre','=',$id)
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
            'offres.id_offre',
    
            'employeurs.name',
            'employeurs.email',
            'employeurs.password',
            'employeurs.prenom',
            'employeurs.identifiant',
            'employeurs.raison_sosial',
            'employeurs.type_entreprise',
            'employeurs.secteur',
            'employeurs.effectif',
            'employeurs.ville',
            'employeurs.tele',
            'employeurs.site',
            'employeurs.poste',
            'employeurs.coordonnees',
            'employeurs.logo',
            'employeurs.description',
            'employeurs.nbr_handicap',
            'employeurs.politique',
            'employeurs.accessibilite',
            
                )
              ->get();
              
            return view('plusoffre',compact('data'));
    
            }


            public function affoffre(){
                $job=DB::table('offres')
                ->join('employeurs','offres.id_employeur','=','employeurs.id')
                ->select('offres.nref',
                'employeurs.logo as img',
                'employeurs.id',
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
                'offres.id_offre')
                ->get();
                $data=DB::table('offres')
                ->join('employeurs','offres.id_employeur','=','employeurs.id')
                ->select( 'offres.domaine',
                )
                ->groupBy('domaine')

                ->get();
                return view('jobpost',compact('job','data'));
            }


        

            function chercher(Request $request){

                $region =request()->get('region');
                  $ville =request()->get ('ville');
                  $type_contrat =request()->get('type_contrat');
                  $domaine =request()->get( 'domaine');

                  
             $data=DB::table('offres')
             ->where('region','LIKE','%'.$region.'%')
             ->where('ville','LIKE','%'.$ville.'%')
             ->where('type_contrat','LIKE','%'.$type_contrat.'%')
             ->where('domaine','LIKE','%'.$domaine.'%')

                 ->select(
                     'offres.id_offre',
                     'offres.descriptif_poste',
                     'offres.niveau_experience',
                     'offres.type_contrat' , 
                     'offres.langue',
                     


                 )
                 ->get();
                 
           return view('serchofr',compact('data'));
     
         
         
       
         }

          
            
}