<?php

namespace App\Http\Controllers;
use Auth;
use DB;
use App\User;
use App\Formation;
use App\Candidat;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;



class FormationController extends Controller
{

public function saveformation(Request $request){
    $id=Auth::guard('candidat')->user()->id;
    $formation= new formation();
    $formation->intitule=$request->input('intitule');
    $formation->date = $request->input('date');
    $formation->niveau = $request->input('niveau');
    $formation->etablissement = $request->input('etablissement');
    $formation->id_candidat=$id;
    $formation->save();
    return redirect()->back()->with('message', 'formation bien supp');

}


}
