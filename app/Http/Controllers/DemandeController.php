<?php
namespace App\Http\Controllers;
use App\Notifications\NouvelleDemande;
use Auth;
use DB;
use App\User;
use App\Demande;
use App\Employeur;
use App\Candidat;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;
use DateTime;
class DemandeController extends Controller
{
    public function serchs()
    {
        $id= Auth::guard('employeur')->user()->id;
        $data=DB::table('demandes')
        ->join('candidats','demandes.id_candidat','=','candidats.id')
        ->join('offres','demandes.id_offre','=','offres.id_offre')
        ->select(
            'demandes.id_demande',
            'candidats.id',
            'candidats.name',
            'candidats.email',
            'candidats.prenom' ,
            'offres.descriptif_poste',
            'candidats.type_handicape'
            )
            ->where('demandes.etat','=',"en_cours")


            ->get();
          return view('candidatures',compact('data'));
  

    }
  public function accepter($idd)
{
  DB::table('demandes')
    ->where('id_demande', $idd)
    ->update(['etat' => 'Confirmé']);
    return redirect()->back()->with('message', 'demande bien acc');
}
public function refuser($idd)
{
 DB::table('demandes')
    ->where('id_demande', $idd)
    ->update(['etat' => 'Annulé']);
    return redirect()->back()->with('message', 'demande bien supp');
}


public function postule(Request $request ,int $id_offre)
{

    $id= Auth::guard('candidat')->user()->id;
    $demande = new demande();
    $demande->id_offre =$id_offre;
    $demande->id_candidat = $id;


$demande->save();


return redirect()->back()->with('message', 'offre bien ajouter');

}


}
