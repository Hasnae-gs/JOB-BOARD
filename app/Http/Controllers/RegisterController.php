<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Candidat;
use App\Employeur;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;
    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
        $this->middleware('guest:candidat');
        $this->middleware('guest:employeur');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required|string|max:255'],
            'prenom' => ['required|string|max:255'],
            'email' => ['required|string|email|max:255|unique:users'],
            'password' =>[ 'required|string|min:6|confirmed'],
            'logo' => ['sometimes', 'image', 'mimes:jpg,jpeg,bmp,svg,png','max:5000'],
            'image' =>['requierd', 'image', 'mimes:jpg,jpeg,bmp,svg,png','max:5000'],
            'CV' => ['requierd', 'file', 'mimes:pdf,doc,docx,txt,','max:5000'],
            'lettre_motivation' => ['requierd', 'file', 'mimes:pdf,doc,docx,txt,','max:5000'],
        ]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showCandidatRegisterForm()
    {
        return view('auth.register2', ['url' => 'candidat']);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showEmployeurRegisterForm()
    {
        return view('auth.register', ['url' => 'employeur']);
    }

    /**
     * @param array $data
     *
     * @return mixed
     */
    // protected function create(array $data)
    // {
    //     return User::create([
    //         'name' => $data['name'],
    //         'email' => $data['email'],
    //         'password' => Hash::make($data['password']),
    //     ]);
    // }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    // protected function createCandidat(Request $request)
    // {
    //     $this->validator($request->all())->validate();
    //     Candidat::create([
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'password' => Hash::make($request->password),
    //         'prenom' => $request->prenom,

    //     ]);
    //     return redirect()->intended('login/candidat');
    // }

    /**
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    // protected function createEmployeur(Request $request)
    // {
    //     $this->validator($request->all())->validate();
    //     Employeur::create([
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'password' => Hash::make($request->password),
    //         'prenom' => $request->prenom,
    //         'identifiant' => $request->identifiant,
    //         'raison_sosial' => $request->raison_sosial,
    //         'type_entreprise' => $request->type_entreprise,
    //         'secteur' => $request->secteur,
    //         'effectif' => $request->effectif,
    //         'ville' => $request->ville,
    //         'tele' => $request->tele,
    //         'site' => $request->site,
    //         'poste' => $request->poste,
    //         'coordonnees' => $request->coordonnees,
    //         'logo'=>"default.png",
    //         'description' => $request->description,
    //         'nbr_handicap' => $request->nbr_handicap,
    //         'politique' => $request->politique,
    //         'accessibilite' => $request->accessibilite,
            
 
    //     ]);
    //     return redirect()->intended('login/employeur');
    // }

        protected function createEmployeur(Request $request )
        {
            if(request()->has('logo') ){
                $logouploaded = request()->file('logo');
                $logoname = time() . '.' . $logouploaded-> getClientOriginalExtension();
                $logopath = public_path('/images/');
                $logouploaded->move($logopath,$logoname);


                Employeur::create([
                            'name' => $request->name,
                            'email' => $request->email,
                            'password' => Hash::make($request->password),
                            'prenom' => $request->prenom,
                            'identifiant' => $request->identifiant,
                            'raison_sosial' => $request->raison_sosial,
                            'type_entreprise' => $request->type_entreprise,
                            'secteur' => $request->secteur,
                            'effectif' => $request->effectif,
                            'ville' => $request->ville,
                            'tele' => $request->tele,
                            'site' => $request->site,
                            'poste' => $request->poste,
                            'coordonnees' => $request->coordonnees,
                            'logo'=>"/images/".$logoname,
                            'description' => $request->description,
                            'nbr_handicap' => $request->nbr_handicap,
                            'politique' => $request->politique,
                            'accessibilite' => $request->accessibilite,
                            ]);
             return redirect()->intended('login/employeur');

                            


            }

           
            Employeur::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'prenom' => $request->prenom,
                'identifiant' => $request->identifiant,
                'raison_sosial' => $request->raison_sosial,
                'type_entreprise' => $request->type_entreprise,
                'secteur' => $request->secteur,
                'effectif' => $request->effectif,
                'ville' => $request->ville,
                'tele' => $request->tele,
                'site' => $request->site,
                'poste' => $request->poste,
                'coordonnees' => $request->coordonnees,
                // 'logo'=>"/images/".$logoname,
                'description' => $request->description,
                'nbr_handicap' => $request->nbr_handicap,
                'politique' => $request->politique,
                'accessibilite' => $request->accessibilite,
                ]);
            return redirect()->intended('login/employeur');




        }



        protected function createCandidat(Request $request)
        {
            if(   request()->has('photo') && request()->has('CV') && request()->has('lettre_motivation')   )
            {
                $photouploaded = request()->file('photo');
                $photoname = time() . '.' . $photouploaded-> getClientOriginalExtension();
                $photopath = public_path('/candidat/');
                $photouploaded->move($photopath,$photoname);

                $CVuploaded = request()->file('CV');
                $CVname = time() . '.' . $CVuploaded-> getClientOriginalExtension();
                $CVpath = public_path('/candidat/');
                $CVuploaded->move($CVpath,$CVname);

                
                $lettreuploaded = request()->file('lettre_motivation');
                $lettrename = time() . '.' . $lettreuploaded-> getClientOriginalExtension();
                $lettrepath = public_path('/candidat/');
                $lettreuploaded->move($lettrepath,$lettrename);




                Candidat::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => Hash::make($request->password),
                    'prenom' => $request->prenom,
                    'civilite' => $request->civilite,
                    'cin' => $request->cin,
                    'ddn' => $request->ddn,
                    'adresse' => $request->adresse,
                    'ville' => $request->ville,
                    'region' => $request->region,
                    'type_handicape' => $request->type_handicape,
                    'tele' => $request->tele,
                    'mobilite_geographique' => $request->mobilite_geographique,
                    'competences_informatiques' => $request->competences_informatiques,
                    'photo'=>"/candidat/". $photoname,
                    'CV'=>"/candidat/". $CVname,
                    'lettre_motivation' => "/candidat/". $lettrename,
                    'description' => $request->description,
                    'nad' => $request->nad,
                    'domaine' => $request->domaine,

                    
                    ]);
                    return redirect()->intended('login/candidat');


            }



            Candidat::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'prenom' => $request->prenom,
                'civilite' => $request->civilite,
                'cin' => $request->cin,
                'ddn' => $request->ddn,
                'adresse' => $request->adresse,
                'ville' => $request->ville,
                'region' => $request->region,
                'type_handicape' => $request->type_handicape,
                'tele' => $request->tele,
                'mobilite_geographique' => $request->mobilite_geographique,
                'competences_informatiques' => $request->competences_informatiques,
                // 'photo'=>"/candidat/". $photoname,
                // 'CV'=>"/candidat/". $CVname,
                // 'lettre_motivation' => "/candidat/". $lettrename,
                'description' => $request->description,
                'nad' => $request->nad,
                'domaine' => $request->domaine,
                ]);
                return redirect()->intended('login/candidat');



}
}