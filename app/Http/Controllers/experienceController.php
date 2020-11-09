<?php

namespace App\Http\Controllers;
use Auth;
use DB;
use App\User;
use App\Experience;
use App\Candidat;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ExperienceController extends Controller
{

    public function index(){
        $data=DB::table('experiences')
            ->select(
                    'experiences.domaine'                
                )
                ->groupBy('domaine')
                   
                ->get();
        return view('jobpost',compact('data'));

}

public function saveexperience(Request $request ){
    $id=Auth::guard('candidat')->user()->id;
    $experience = new experience();
    $experience->poste=$request->input('poste');
    $experience->date = $request->input('date');
    $experience->type_contrat = $request->input('type_contrat');
    $experience->domaine = $request->input('domaine');
    $experience->entreprise = $request->input('entreprise');
    $experience->id_candidat=$id;
    $experience->save();
    return redirect()->back()->with('message', 'experience bien supp');
    ;

}


}
