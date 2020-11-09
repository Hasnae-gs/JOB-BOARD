<?php

namespace App\Http\Controllers;
use Auth;
use DB;
use App\User;
use App\Projet;
use App\Candidat;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ProjetController extends Controller
{

public function saveprojet(Request $request ){
    $id=Auth::guard('candidat')->user()->id;
    $projet= new projet();
    $projet->intitule=$request->input('intitule');
    $projet->domaine=$request->input('domaine');
    $projet->localisation = $request->input('localisation');
    $projet->description = $request->input('description');
    $projet->budget = $request->input('budget');
    $projet->motivation = $request->input('motivation');
    $projet->delai_realisation = $request->input('delai_realisation');
    $projet->id_candidat=$id;
    $projet->save();
    return redirect()->back()->with('message', 'projet bien supp');

}


}
