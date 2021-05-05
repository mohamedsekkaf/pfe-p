<?php

namespace App\Http\Controllers;
use App\Chikaya;
use DB;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function add(Request $request){
        // $request->validate([
        //     'nom'=>'required',
        // ],
        // [
        //     'nom.required'=>'name isrequired',
        // ]);
        $nom = $request->input('nom');
        $prenom = $request->input('prenom');
        $cin = $request->input('cin');
        $telephone = $request->input('telephone');
        $email = $request->input('email');
        $addresse = $request->input('addresse');

        $region = $request->input('region');
        $province = $request->input('province');
        $nom_departement = $request->input('nom_departement');

        $reclamation = $request->input('reclamation');
        $texte_reclamation = $request->input('texte_reclamation');
        
        $check = $request->input('check');

        $password = $request->input('password');

        $data= array('nom'=>$nom,'prenom'=>$prenom,'cin'=>$cin,'telephone'=>$telephone,'email'=>$email,'addresse'=>$addresse,
        'region'=>$region,'province'=>$province,'nom_departement'=>$nom_departement,
        'reclamation'=>$reclamation,'texte_reclamation'=>$texte_reclamation,
        'check'=>$check,'password'=>$password);
        Chikaya::create($data);
        return redirect('/succes');
    }
    function succes(){
        return view('succes');
    }
    function home(){
        $chikaya = Chikaya::all();
        return view('home',compact('chikaya'));
    }
    public function logout(Request $request) {
        Auth::logout();
        return redirect('/');
      }
      public function show($departement){
          $chikaya = Chikaya::where('nom_departement',$departement)->get();
          return view('/details',compact('chikaya'));
      }

      public function suivez(){
          return view('suivez');
      }
      public function notfound(){
          return view('notfound');
      }
      public function check(Request $request){
          $cin = $request->input('cin');
          $password = $request->input('password');
          $chikaya = Chikaya::where('cin',$cin)->get();
          $var = 0;
            foreach($chikaya as $ch){
                if( $ch->password == $password){
                    $var++;
                    $nom = $ch->nom;
                    $prenom = $ch->prenom;
                    $cin = $ch->cin;
                }
            } 
            if($var === 1){
                return view('/result',compact('nom','cin'));
            }else
            {
                return redirect('/notfound');
            }
      }

      public function result(){
            return view('result');
      }
}

