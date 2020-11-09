<?php

namespace App\Http\Controllers;
use Auth;
use DB;
use App\User;
use App\Langue;
use App\Candidat;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class LangueController extends Controller
{

public function savelangue(Request $request ){
    $id=Auth::guard('candidat')->user()->id;
    $langue= new langue();
    $langue->Langue=$request->input('Langue');
    $langue->niveau = $request->input('niveau');
    $langue->id_candidat=$id;
    $langue->save();
    return redirect()->back()->with('message', 'langue bien supp');

}


}
