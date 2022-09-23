<?php
namespace App\Http\Controllers;

use App\Models\colis;
use App\Models\courrier;
use App\Models\reservation;
use Illuminate\Http\Request;
use App\Models\authentification;
use session;
use Illuminate\Support\Facades\DB;

class dashbordController extends Controller{

    public function login(){
        return view('authentification');
    }

    public function index(){
      $totalcolis=colis::count();
      $totalcourriers=courrier::count();
      $totalreservations=reservation::count();
      $datasreservations = DB::table('reservations')->get();
      
      $datas = DB::table('services')->get();
          return view('index',compact('datas','totalcolis','totalcourriers','totalreservations','datasreservations'));

    }

    public function chart(){
        
        return view('charts');
  }

      public function reservation(){
      $datasreservations = DB::table('reservations')->get();

        return view('reservation',compact('datasreservations'));
      }
      
      public function colie(){
      $datascolis = DB::table('colis')->get();
        
            return view('colies',compact('datascolis'));
      }

      public function courrier(){
      $datascourriers = DB::table('courriers')->get();
        
            return view('courriers',compact('datascourriers'));
      }

      public function enregistrer(Request $request){
            $request->validate([
                  "nom"=>"required",
                  "prenom"=>"required",
                  "date_de_naissance"=>"required",
                  "telephone"=>"required",
                  "sexe"=>"required", 
                  "date_de_voyage"=>"required",
                  "origine"=>"required", 
                  "destination"=>"required", 
                  "payement"=>"required"
                  
              ]);
              // lorsque qu'on a declarer les fillable dans le model c'est le cas chez moi
              reservation::create($request->all()); 
              // où dans le cas contraire,
                //  reservation::create([
                //      "nom"=>$request->nom,
                //      "prenom"=>$request->prenom,
                //      "datenaissance"=>$request->datenaissance,
                //      "tel"=>$request->tel,
                //      "sexe"=>$request->sexe, 
                //      "datevoyage"=>$request->datevoyage,
                //      "villedepart"=>$request->villedepart, 
                //      "villedestination"=>$request->villedestination, 
                //      "payement"=>$request->payement
                //  ]);
            //  dd($_POST);
      
        //   // reviens sur la meme page ou il y a le formulaire et affiche le message
              return redirect('/dashbord')->with("success","personne ajouter avec succès");
          }

          public function enregistrer_colis(Request $request){
            $request->validate([
                  "envoyeur"=>"required",
                  "recepteur"=>"required",
                  "telephone"=>"required",
                  "origine"=>"required",
                  "destination"=>"required", 
                  "status"=>"required",
                  "date_de_reception"=>"required", 
                  "nom_du_chauffeur"=>"required", 
                  "payement"=>"required"
                  
              ]);
              // lorsque qu'on a declarer les fillable dans le model c'est le cas chez moi
              colis::create($request->all()); 
              
              return redirect('/dashbord')->with("success","personne ajouter avec succès");
          }

          public function enregistrer_courriers(Request $request){
            $request->validate([
                  "envoyeur"=>"required",
                  "recepteur"=>"required",
                  "telephone"=>"required",
                  "origine"=>"required",
                  "destination"=>"required", 
                  "status"=>"required",
                  "date_de_reception"=>"required", 
                  "nom_du_chauffeur"=>"required", 
                  "payement"=>"required"
                  
              ]);
              // lorsque qu'on a declarer les fillable dans le model c'est le cas chez moi
              courrier::create($request->all()); 
              
              return redirect('/dashbord')->with("success","personne ajouter avec succès");
          }

    
    public function supprimer($id){
        
        $reservation = reservation::find($id);
        $reservation->delete();
        return redirect('/dashbord')->with("success","personne supprimer avec succes");

  }
    public function supprimer_colis($id){
            
        $coli = colis::find($id);
        $coli->delete();
        return redirect('/dashbord')->with("success","personne supprimer avec succes");

    }
    public function supprimer_courriers($id){
            
        $courrier = courrier::find($id);
        $courrier->delete();
        return redirect('/dashbord')->with("success","personne supprimer avec succes");

    }
    public function editer($id){
        $datasreservations = reservation::find($id);
            return view('edit', compact('datasreservations'));
        

    }
        
    public function ajour(Request $request,$id){
        $datasreservations = reservation::find($id);
        $datasreservations->nom = $request->input('nom');
        $datasreservations->prenom = $request->input('prenom');
        $datasreservations->date_de_naissance = $request->input('date_de_naissance');
        $datasreservations->telephone = $request->input('telephone');
        $datasreservations->sexe = $request->input('sexe');
        $datasreservations->date_de_voyage = $request->input('date_de_voyage');
        $datasreservations->origine = $request->input('origine');
        $datasreservations->destination = $request->input('destination');
        $datasreservations->payement = $request->input('payement');
        $datasreservations->update();
        return redirect('/dashbord')->with("success","mis a jour effectuer avec succes");

        

    }
    public function editercolis($id){
        $datascolis = colis::find($id);
            return view('editcolis', compact('datascolis'));
        

    }
        
    public function ajourcolis(Request $request,$id){
        $datascolis = colis::find($id);
        $datascolis->envoyeur = $request->input('envoyeur');
        $datascolis->recepteur = $request->input('recepteur');
        $datascolis->telephone = $request->input('telephone');
        $datascolis->origine = $request->input('origine');
        $datascolis->destination = $request->input('destination');
        $datascolis->status = $request->input('status');
        $datascolis->date_de_reception = $request->input('date_de_reception');
        $datascolis->nom_du_chauffeur = $request->input('nom_du_chauffeur');
        $datascolis->payement = $request->input('payement');
        $datascolis->update();
        return redirect('/colies')->with("success","mis a jour effectuer avec succes");

        

    }

    public function editercourriers($id){
        $datascourriers = courrier::find($id);
            return view('editcourrier', compact('datascourriers'));
        

    }
        
    public function ajourcourriers(Request $request,$id){
        $datascourriers = courrier::find($id);
        $datascourriers->envoyeur = $request->input('envoyeur');
        $datascourriers->recepteur = $request->input('recepteur');
        $datascourriers->telephone = $request->input('telephone');
        $datascourriers->origine = $request->input('origine');
        $datascourriers->destination = $request->input('destination');
        $datascourriers->status = $request->input('status');
        $datascourriers->date_de_reception = $request->input('date_de_reception');
        $datascourriers->nom_du_chauffeur = $request->input('nom_du_chauffeur');
        $datascourriers->payement = $request->input('payement');
        $datascourriers->update();
        return redirect('/courriers')->with("success","mis a jour effectuer avec succes");

    }

    

    // public function dashboard()
    // {
    //     return " oui je l'ai fais";
    // }

    public function loginuser(Request $request){
        $request->validate( [
            'email' => 'required',
            'password' => 'required|min:6'
        ]);
        $userconnexion = authentification::where('email','=', $request->email)->first();
        if ($userconnexion) {
           if ($userconnexion = authentification::where('password','=', $request->password)->first()) {
                $request->session()->put('loginId',$userconnexion->id );
                return redirect('/dashbord');
           } else {
            return back()->with('fail','Mot de passe ou email incorrecte incorrect');
           }

        } 
        // echo 'valu posted';

    }

  
    }

   
// }