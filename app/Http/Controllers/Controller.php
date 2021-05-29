<?php

namespace App\Http\Controllers;
use App\Chikaya;
use App\Etat;
use App\Reponse;
use App\User;
use DB;
use Auth;
use Charts;
use Mail;

use Carbon\Carbon;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
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
            '',
        ],
        [
            ''=>'',
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

        $password = rand();

        $data= array('nom'=>$nom,'prenom'=>$prenom,'cin'=>$cin,'telephone'=>$telephone,'email'=>$email,'addresse'=>$addresse,
        'region'=>$region,'province'=>$province,'nom_departement'=>$nom_departement,
        'reclamation'=>$reclamation,'texte_reclamation'=>$texte_reclamation,
        'check'=>$check,'password'=>$password ,'date'=>date('Y'));
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
        $succes = 'Votre Reclamation a été Enregistrer';

        // <<<<<<<<<----- sending mail from gmail  ----->>>>>>> 
        $data = array('name'=>$nom,'prenom'=> $prenom,'password'=>$password);
    Mail::send('mail', $data, function($message) use ($email) {
       $message->to($email, 'Tutorials Point')->subject
          ('Laravel Basic Testing Mail');
       $message->from('pfe.p@dorossibac.com','MSOS');
    });
    $message= ' Check your inbox to get your password';
        // <<<<<<<<<----- sending mail from gmail  ----->>>>>>> 
        return view('/succes',compact('succes','message'));
    }
    function succes(){
        return view('succes');
    }
    function home(){
        $chikaya = Chikaya::orderBy('id','desc')->paginate(10);
        return view('home',compact('chikaya'));
    }
    public function logout(Request $request) {
        Auth::logout();
        return redirect('/');
      }
      public function show($departement){
          $chikaya = Chikaya::where('nom_departement',$departement)->orderBy('id','desc')->get();
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
          $chikaya = Chikaya::where('cin',$cin)->orderBy('id','desc')->get();
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
        $chikaya = Chikaya::where('id',$id)->orderBy('id','desc')->get();
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
        $month = ['1','2','3','4','5','6','7','8','9','10','11','12'];
        $chikaya = [];
        $d1 = 'Département économique';
        $d2 = 'Département de l environnement';
        $d3 = 'département de santé';
        $d4 = 'Département des sports';
        $d5 = 'Département de la police administrative';

        foreach ($year as $key => $value) {
            $chikaya[] = Chikaya::where(\DB::raw('date'),$value)->count();
            $dd1[] = Chikaya::where(DB::raw('date'),$value)->where('nom_departement',$d1)->count();
            $dd2[] = Chikaya::where(DB::raw('date'),$value)->where('nom_departement',$d2)->count();
            $dd3[] = Chikaya::where(DB::raw('date'),$value)->where('nom_departement',$d3)->count();
            $dd4[] = Chikaya::where(DB::raw('date'),$value)->where('nom_departement',$d4)->count();
            $dd5[] = Chikaya::where(DB::raw('date'),$value)->where('nom_departement',$d5)->count();
            // $dd5[] = Chikaya::where(DB::raw("DATE_FORMAT(date, '%Y')"),$value)->where('nom_departement',$d5)->count();

        }
    	return view('statistique')->with('year',json_encode($year,JSON_NUMERIC_CHECK))
                                  ->with('chikaya',json_encode($chikaya,JSON_NUMERIC_CHECK))
                                  ->with('dd1',json_encode($dd1,JSON_NUMERIC_CHECK))
                                  ->with('dd2',json_encode($dd2,JSON_NUMERIC_CHECK))
                                  ->with('dd3',json_encode($dd3,JSON_NUMERIC_CHECK))
                                  ->with('dd4',json_encode($dd4,JSON_NUMERIC_CHECK))
                                  ->with('dd5',json_encode($dd5,JSON_NUMERIC_CHECK))
                                  ->with('month',json_encode($month,JSON_NUMERIC_CHECK));
                                  
    }

    public function delete(Request $request){
        $id = $request->input('id');
        $id_chikaya = $request->input('id_chikaya');
        DB::table('reponses')->where('id',$id)->delete();
        return redirect('/showdetails/'.$id_chikaya);
    }
    public function recherche(Request $request){
        $cin = $request->input('cin');
        $chikaya = Chikaya::where('cin',$cin)->get();
        $var = 0;
        foreach($chikaya as $ch){
            $var++;
        }
        if($var === 0){
            $result = 'Aucune Résultat';
            return view('/recherche',compact('chikaya','result'));
        }else{
            $result = '';
            return view('/recherche',compact('chikaya','result'));
        }
    }
    public function rechercher(){
        return view('recherche');
    }


// use mail 
public function sendmail(Request $request) {
    $id = $request->input('id');
    $nom = $request->input('nom');
    $prenom = $request->input('prenom');
    $email = $request->input('email');
    $sujet_reclamation = $request->input('sujet_reclamation');
    $sendmail = $request->input('sendmail');
    $data = array('nom'=>$nom,'prenom'=>$prenom,'email'=>$email,'sujet_reclamation'=>$sujet_reclamation,'sendmail'=>$sendmail);
    Mail::send('sendmailto', $data, function($message) use ($nom,$prenom,$email,$sujet_reclamation,$id,$sendmail) {
        
       $message->to($email, 'Tutorials Point')->subject
          ('Laravel Basic Testing Mail');
       $message->from('pfe.p@dorossibac.com','MSOS');
       
    });
    return redirect('/showdetails/'.$id);
 }
 

}
