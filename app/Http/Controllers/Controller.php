<?php

namespace App\Http\Controllers;
use App\Chikaya;
use DB;
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
        //     'name'=>'required',
        //     'firstname'=>'required',
        //     'cin'=>'required',
        //     'email'=>'required',
        //     'sujet_principal'=>'required',
        //     'objet'=>'required',
        //     'message'=>'required',

        // ],
        // [
        //     'name.required'=>'name isrequired',
        //     'firstname.required'=>'first name is required',
        //     'cin.required'=>'cin is required',
        //     'email.required'=>'email is required',
        //     'sujet_principal.required'=>'sujet principal is required',
        //     'objet.required'=>'objet is required',
        //     'message.required'=>'message is required',   
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

        $data= array('nom'=>$nom,'prenom'=>$prenom,'cin'=>$cin,'telephone'=>$telephone,'email'=>$email,'addresse'=>$addresse,
        'region'=>$region,'province'=>$province,'nom_departement'=>$nom_departement,
        'reclamation'=>$reclamation,'texte_reclamation'=>$texte_reclamation,
        'check'=>$check);
        Chikaya::create($data);
        return redirect('/succes');
    }
    function succes(){
        return view('succes');
    }
}
