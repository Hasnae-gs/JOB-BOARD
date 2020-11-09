<?php

namespace App\Http\Controllers;
use Auth;
use DB;
use App\User;
use App\Employeur;
use App\Candidat;
use App\Offre;
use App\Demande;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class CandidatController extends Controller
{
   
    public function profil(){
        $data=DB::table('candidats')
            ->select(
            'candidats.id',
            'candidats.name',
            'candidats.email',
            'candidats.prenom' , 
            'candidats.civilite',
            'candidats.cin',
            'candidats.ddn',
            'candidats.adresse',
            'candidats.ville',
            'candidats.region',
            'candidats.type_handicape',
            'candidats.tele',
            'candidats.mobilite_geographique',
            'candidats.competences_informatiques', 
            'candidats.photo',
            'candidats.CV',
            'candidats.lettre_motivation',
            'candidats.description',
            'candidats.nad',
            'candidats.domaine',

        )
        ->orderBy('id', 'DESC')->take(10)->get();
        return view('employeur',compact('data'));

        }


        public function plus($id){
 
            $data=DB::table('candidats')
            ->where('id','=',$id)
            ->select(
                'candidats.name',
                'candidats.email',
                'candidats.prenom' , 
                'candidats.civilite',
                'candidats.cin',
                'candidats.ddn',
                'candidats.adresse',
                'candidats.ville',
                'candidats.region',
                'candidats.type_handicape',
                'candidats.tele',
                'candidats.mobilite_geographique',
                'candidats.competences_informatiques', 
                'candidats.photo',
                'candidats.CV',
                'candidats.lettre_motivation',
                'candidats.description',
                'candidats.nad',
                'candidats.domaine',

                )
                ->get(); 
                
            $job=DB::table('candidats')
            ->join('langues','langues.id_candidat','=','candidats.id')
            ->where('id','=',$id)
            ->select(
                'langues.niveau',
                'langues.Langue', )
              ->get();
              $jb=DB::table('candidats')
              ->join('experiences','experiences.id_candidat','=','candidats.id')
              ->where('id','=',$id)
              ->select(
                  'experiences.poste',
                  'experiences.date',
                  'experiences.type_contrat',
                  'experiences.domaine',
                  'experiences.entreprise',
                    )
                ->get();
                $j=DB::table('candidats')
                ->join('formations','formations.id_candidat','=','candidats.id')
                ->where('id','=',$id)
                ->select(
                     'formations.intitule',
                    'formations.date',
                    'formations.niveau',
                    'formations.etablissement',
                )
                  ->get();
              
            return view('plusdtail',compact('data','job','jb','j'));

            }


            function index(Request $request){
                if(request()->ajax())
                {
                 if(!empty($request->intitule)&&!empty($request->region)&&!empty($request->ville)&&!empty($request->nad)
                 &&!empty($request->niveau)&&!empty($request->Langue))
                 {
                  $data = DB::table('candidats')
                  ->join('experiences','experiences.id_candidat','=','candidats.id')
                  ->join('formations','formations.id_candidat','=','candidats.id')
                  ->join('langues','langues.id_candidat','=','candidats.id')    
                  ->select(
                    'candidats.id',
                    'candidats.name',
                    'candidats.email',
                    'candidats.prenom' , 
                    'candidats.civilite',
                    'candidats.cin', )
                    ->where('region', $request->region)
                    ->where('ville', $request->ville)
                    ->where('nad', $request->nad)
                    ->where('niveau', $request->niveau)
                    ->where('Langue', $request->Langue)
                    ->get();

                 }                
                else
                {
                 $data = DB::table('candidats')
                 ->join('experiences','experiences.id_candidat','=','candidats.id')
                 ->join('formations','formations.id_candidat','=','candidats.id')
                 ->join('langues','langues.id_candidat','=','candidats.id')    
                 ->select(
                   'candidats.id',
                   'candidats.name',
                   'candidats.email',
                   'candidats.prenom' , 
                   'candidats.civilite',
                   'candidats.ville', 
                   'candidats.region',
                   'candidats.cin',
                   )                  
                    ->get();
                   return datatables()->of($data)->make(true);

                }
            
            return view('serchcve', compact('data'));

            }
        
                }


                
public function show()
{
  $id= Auth::guard('candidat')->user()->id;
  $data=DB::table('candidats')
            ->join('demandes','candidats.id','=','demandes.id_candidat')
            ->join('offres','demandes.id_offre','=','offres.id_offre')
            ->join('employeurs','offres.id_employeur','=','employeurs.id')

            ->where('candidats.id',$id)

            ->select(
              'employeurs.name',
              'employeurs.type_entreprise',
              'employeurs.ville',
              'demandes.etat',
              'offres.domaine',
              
              )
            ->get();
            $nbr=DB::table('candidats')
            ->join('demandes','candidats.id','=','demandes.id_candidat')
            ->where('candidats.id',$id)
            ->select('demandes.id_candidat')
            ->get();
            $nb=count($nbr);

            return view('candidaturs', compact('data','nb'));
}
        public function countc()
        {
              $nbr=DB::table('candidats')
              ->select('candidats.id')
              ->get();
              $nbrc=count($nbr);

              $nbr2=DB::table('employeurs')
              ->select('employeurs.id')
              ->get();
              $nbre=count($nbr2);

              $nbr3=DB::table('offres')
              ->select('offres.id_offre')
              ->get();
              $nbro=count($nbr3);
              
              
              $data=DB::table('offres')
                ->select( 'offres.domaine',
                )
                ->groupBy('domaine')
                ->get();


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
              return view('index', compact('nbrc','nbre','nbro','data','job'));

                }
            
                
                function search(Request $request){

                     $region =request()->get('region');
                       $ville =request()->get ('ville');
                       $nad=request()->get ('nad');
                       $type_handicape =request()->get('type_handicape');
                       $domaine =request()->get( 'domaine');

                       
                  $data=DB::table('candidats')
                  ->where('region','LIKE','%'.$region.'%')
                  ->where('ville','LIKE','%'.$ville.'%')
                  ->where('nad','LIKE','%'.$nad.'%')
                  ->where('type_handicape','LIKE','%'.$type_handicape.'%')
                  ->where('domaine','LIKE','%'.$domaine.'%')

                      ->select(
                          'candidats.id',
                          'candidats.name',
                          'candidats.email',
                          'candidats.prenom' , 
                          'candidats.civilite',
                          'candidats.cin',
                          'candidats.domaine',
                          'candidats.nad',


                      )
                      ->get();
                      
                return view('serchcve',compact('data'));
          
              
              
            
              }
 }