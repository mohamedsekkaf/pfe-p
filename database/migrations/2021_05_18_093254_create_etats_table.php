<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Chikaya;
use App\Etat;
class CreateEtatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etats', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_chikaya');
            $table->string('etat');
            $table->timestamps();
        });





        for($i = 0 ; $i < 20 ;$i++){
            $data= array('nom'=>'sekkaf','prenom'=>'mohammed','cin'=>'MD16745','telephone'=>rand(10,100000000000),'email'=>'sekkaf@gmail.com','addresse'=>'el jadida',
            'region'=>'casablanca-settat','province'=>'el jadida','nom_departement'=>'Département économique',
            'reclamation'=>'text','texte_reclamation'=>'text',
            'check'=>'on','password'=>rand(10,1000) ,'date'=>date('2020'));
            Chikaya::create($data);
            $var1 = Chikaya::all();
            $id = 0; 
            foreach($var1 as $c){
                $id++;
            }
            $etat= 'Le traitement n a pas commencé';
            $data1 = array('id_chikaya'=>$id,'etat'=>$etat);
            Etat::create($data1);
         }
         for($i = 0 ; $i < 30 ;$i++){
            $data= array('nom'=>'sekkaf','prenom'=>'mohammed','cin'=>'MD16745','telephone'=>rand(10,100000000000),'email'=>'sekkaf@gmail.com','addresse'=>'el jadida',
            'region'=>'casablanca-settat','province'=>'el jadida','nom_departement'=>'Département de l environnement',
            'reclamation'=>'text','texte_reclamation'=>'text',
            'check'=>'on','password'=>rand(10,1000) ,'date'=>date('2020'));
            Chikaya::create($data);
            $var1 = Chikaya::all();
        $id = 0; 
        foreach($var1 as $c){
            $id++;
        }
        $etat= 'Le traitement n a pas commencé';
        $data1 = array('id_chikaya'=>$id,'etat'=>$etat);
        Etat::create($data1);
         }
         for($i = 0 ; $i < 50 ;$i++){
            $data= array('nom'=>'sekkaf','prenom'=>'mohammed','cin'=>'MD16745','telephone'=>rand(10,100000000000),'email'=>'sekkaf@gmail.com','addresse'=>'el jadida',
            'region'=>'casablanca-settat','province'=>'el jadida','nom_departement'=>'département de santé',
            'reclamation'=>'text','texte_reclamation'=>'text',
            'check'=>'on','password'=>rand(10,1000) ,'date'=>date('2020'));
            Chikaya::create($data);
            $var1 = Chikaya::all();
            $id = 0; 
            foreach($var1 as $c){
                $id++;
            }
            $etat= 'Le traitement n a pas commencé';
            $data1 = array('id_chikaya'=>$id,'etat'=>$etat);
            Etat::create($data1);
         }
         for($i = 0 ; $i < 70 ;$i++){
            $data= array('nom'=>'sekkaf','prenom'=>'mohammed','cin'=>'MD16745','telephone'=>rand(10,100000000000),'email'=>'sekkaf@gmail.com','addresse'=>'el jadida',
            'region'=>'casablanca-settat','province'=>'el jadida','nom_departement'=>'Département des sports',
            'reclamation'=>'text','texte_reclamation'=>'text',
            'check'=>'on','password'=>rand(10,1000) ,'date'=>date('2020'));
            Chikaya::create($data);
            $var1 = Chikaya::all();
            $id = 0; 
            foreach($var1 as $c){
                $id++;
            }
            $etat= 'Le traitement n a pas commencé';
            $data1 = array('id_chikaya'=>$id,'etat'=>$etat);
            Etat::create($data1);
         }
         for($i = 0 ; $i < 100 ;$i++){
            $data= array('nom'=>'sekkaf','prenom'=>'mohammed','cin'=>'M'.rand(10,100000),'telephone'=>rand(10,10000000000),'email'=>'sekkaf@gmail.com','addresse'=>'el jadida',
            'region'=>'casablanca-settat','province'=>'el jadida','nom_departement'=>'Département de la police administrative',
            'reclamation'=>'text','texte_reclamation'=>'text',
            'check'=>'on','password'=>rand(10,1000) ,'date'=>date('2020'));
            Chikaya::create($data);
            $var1 = Chikaya::all();
            $id = 0; 
            foreach($var1 as $c){
                $id++;
            }
            $etat= 'Le traitement n a pas commencé';
            $data1 = array('id_chikaya'=>$id,'etat'=>$etat);
            Etat::create($data1);
         }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('etats');
    }
}
