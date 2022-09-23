{{-- @extends('layout.app') --}}
     {{-- @section('content') --}}
     <!DOCTYPE html>
     <html lang="en">
     <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
     </head>
     <body>
        <div  id="colis" class="container w-50 formulairecolis"  >
               
            <form method = "POST" action="{{url('updatecolis_data/'.$datascolis->id)}}">
               {{csrf_field()}}
               @method ('PUT')
               <h2>Mis a jour des colis</h2>
               <div class="mb-3">
                   <label for="recipient-nom" class="col-form-label">envoyeur</label>
                   <input type="text" class="form-control" id="recipient-nom" value = "{{$datascolis->envoyeur}}" name = "envoyeur"  placeholder="veuillez entrer le nom de l'envoyeur" >
               </div>
             
               <div class="mb-3">
                   <label for="recipient-prenom" class="col-form-label">recepteur</label>
                   <input type="text" class="form-control" id="recipient-prenom" value = "{{$datascolis->recepteur}}"  name = "recepteur" placeholder="veuillez entrer le nom du recepteur" >
               </div>
               <div class="mb-3">
                   <label for="recipient-naissance" class="col-form-label">telephone</label>
                   <input type="text" class="form-control" id="recipient-naissance" value = "{{$datascolis->telephone}}" name = "telephone" placeholder=" votre numero de telephone" >
               </div>
               <div class="mb-3">
                   <label for="recipient-tel" class="col-form-label">origine</label>
                   <input type="text" class="form-control" id="recipient-tel" value = "{{$datascolis->origine}}" name = "origine" placeholder=" ville de depart" >
               </div>
            
               <div class="mb-3">
                   <label for="recipient-destination" class="col-form-label">Destination</label>
                   <input type="text" class="form-control" id="recipient-destination" value = "{{$datascolis->destination}}" name = "status" placeholder="ville de destination" >
               </div>
               <div class="mb-3">
                <label for="recipient-destination" class="col-form-label">status</label>
                <input type="text" class="form-control" id="recipient-destination" value = "{{$datascolis->destination}}" name = "destination"placeholder="le status du colis" >
            </div>
            <div class="mb-3">
                <label for="recipient-destination" class="col-form-label">date de reception</label>
                <input type="date" class="form-control" id="recipient-destination" value = "{{$datascolis->date_de_reception}}" name = "date_de_reception" placeholder="la date de reception" >
            </div>
            <div class="mb-3">
                <label for="recipient-destination" class="col-form-label">nom du chauffeur</label>
                <input type="text" class="form-control" id="recipient-destination" value = "{{$datascolis->nom_du_chauffeur}}" name = "nom_du_chauffeur" placeholder="le nom du chauffeur" >
            </div>
               <div class="mb-3">
                   <label for="recipient-payement" class="col-form-label">Payement</label>
                   <input type="text" class="form-control" id="recipient-payement" value = "{{$datascolis->payement}}" name = "payement" placeholder="payer/non payer" >
               </div>
               </div>
               <div class="modal-footer">
                   <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                   <button type="submit" class="btn btn-primary">Mis a jour</button>
               </div>
           </form>
       </div>
       <script src="{{asset('js/app.js')}}"></script>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
     </body>
     </html>
     

  {{-- @endsection --}}