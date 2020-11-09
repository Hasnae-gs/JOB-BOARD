<?php

namespace App\Http\Controllers;
use Auth;
use DB;
use App\User;
use App\Offre;
use App\Employeur;
use App\Candidat;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class OffreController extends Controller
{
    public function count( ){

        $count = DB::table('offres')->count()
        ->select(DB::raw('count(*) as count'))
                     ->where('column', '=', $value)
                     ->first()
                     ->count;
        $cont = DB::table('employeurs')->count()
        ->select(DB::raw('count(*) as cont'))
                     ->where('column', '=', $value)
                     ->first()
                     ->count;
        $cot = DB::table('candidats')->count()
        ->select(DB::raw('count(*) as cot'))
                     ->where('column', '=', $value)
                     ->first()
                     ->count;
        return View::make('employeur')->with('count', $count,'cont', $cont,'cot', $cot);

    }

}