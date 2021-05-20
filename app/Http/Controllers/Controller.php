<?php

namespace App\Http\Controllers;
use App\Chikaya;
use App\Etat;
use App\Reponse;
use App\User;
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
        $request->validate([
            'password'=>'required|unique:chikayas',
        ],
        [
            'password.unique'=>'Entrez un mot de passe fort',
        ]);
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
        $var1 = Chikaya::all();
        $id = 0; 
        foreach($var1 as $c){
            $id++;
        }
        $etat= 'Le traitement n a pas commencé';
        $data1 = array('id_chikaya'=>$id,'etat'=>$etat);
        Etat::create($data1);
        // $data2  = array('id_chikaya'=>$id,'reponse'=>'non');
        // Reponse::create($data2);
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
                    $id = $ch->id;
                    $nom = $ch->nom;
                    $prenom = $ch->prenom;
                    $cin = $ch->cin;
                }
            } 
            
            if($var != 0){
                $etat = Etat::where('id_chikaya',$id)->get();
                $reponse = Reponse::where('id_chikaya',$id)->get();
                return view('/result',compact('nom','cin','prenom','etat','reponse'));
            }else
            {
                return redirect('/notfound');
            }
      }

      public function result(){
            return view('result');
      }
      public function showdetails($id){
        $chikaya = Chikaya::where('id',$id)->get();
        $etat = Etat::where('id_chikaya',$id)->get();
        $reponse = Reponse::where('id_chikaya',$id)->get();
        return view('/showdetails',compact('chikaya','etat','reponse'));
    }
    public function traitementetat(Request $request){
        $id = $request->input('id');
        $etat = $request->input('etat');
        $data = array('etat'=>$etat);
        DB::table('etats')->where('id_chikaya',$id)->update($data);
        return redirect('/showdetails/'.$id);
    }
    public function traitementreponse(Request $request){
        $id = $request->input('id');
        $reponse = $request->input('reponse');
        $data1 = array('id_chikaya'=>$id,'reponse'=>$reponse);
        Reponse::create($data1);
        return redirect('/showdetails/'.$id);
    }
    // public function statistique(){
    //     return view('/statistique');
    // }




    public function statistique()
    {
        $year = ['2020','2021','2022','2023','2024','2025'];

        $user = [];
        foreach ($year as $key => $value) {
            $chikaya[] = Chikaya::where(\DB::raw("DATE_FORMAT(created_at, '%Y')"),$value)->count();
        }

    	return view('statistique')->with('year',json_encode($year,JSON_NUMERIC_CHECK))->with('chikaya',json_encode($chikaya,JSON_NUMERIC_CHECK));
    }
    
}