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
        $request->validate([
            'name'=>'required',
            'firstname'=>'required',
            'cin'=>'required',
            'email'=>'required',
            'sujet_principal'=>'required',
            'objet'=>'required',
            'message'=>'required',

        ],
        [
            'name.required'=>'name isrequired',
            'firstname.required'=>'first name is required',
            'cin.required'=>'cin is required',
            'email.required'=>'email is required',
            'sujet_principal.required'=>'sujet principal is required',
            'objet.required'=>'objet is required',
            'message.required'=>'message is required',   
        ]);
        $name = $request->input('name');
        $firstname = $request->input('firstname');
        $cin = $request->input('cin');
        $email = $request->input('email');
        $sujet_principal = $request->input('sujet_principal');
        $objet = $request->input('objet');
        $message = $request->input('message');
        $data= array('name'=>$name,'firstname'=>$firstname,'cin'=>$cin,'email'=>$email,'sujet_principal'=>$sujet_principal,'objet'=>$objet,'message'=>$message);
        Chikaya::create($data);
        return redirect('/succes');
    }
    function succes(){
        return view('succes');
    }
}
