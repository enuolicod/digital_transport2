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
        <div  id="reservation" class="container w-50 formulaire"  >
               
            <form method = "POST" action="{{url('update_data/'.$datasreservations->id)}}">
               {{csrf_field()}}
               @method ('PUT')
               <h2>Mis a jour des Reservations</h2>
               <div class="mb-3">
                   <label for="recipient-nom" class="col-form-label">Nom</label>
                   <input type="text" class="form-control" id="recipient-nom" value = "{{$datasreservations->nom}}" name = "nom"  placeholder="veuillez entrer votre nom" >
               </div>
             
               <div class="mb-3">
                   <label for="recipient-prenom" class="col-form-label">Prenom</label>
                   <input type="text" class="form-control" id="recipient-prenom" value = "{{$datasreservations->prenom}}"  name = "prenom" placeholder="veuillez entrer votre prenom" >
               </div>
               <div class="mb-3">
                   <label for="recipient-naissance" class="col-form-label">Date de naissance</label>
                   <input type="date" class="form-control" id="recipient-naissance" value = "{{$datasreservations->date_de_naissance}}" name = "date_de_naissance" placeholder=" votre date de naissance" >
               </div>
               <div class="mb-3">
                   <label for="recipient-tel" class="col-form-label">Telephone</label>
                   <input type="text" class="form-control" id="recipient-tel" value = "{{$datasreservations->telephone}}" name = "telephone" placeholder=" votre numero de telephone" >
               </div>
               <div class="mb-3">
                   <label for="recipient-sexe" class="col-form-label">Sexe</label>
                   <input type="text" class="form-control" id="recipient-sexe" value = "{{$datasreservations->sexe}}" name = "sexe" placeholder=" votre sexe" >
               </div>
               <div class="mb-3">
                   <label for="recipient-voyage" class="col-form-label">Date de voyage</label>
                   <input type="date" class="form-control" id="recipient-voyage" value = "{{$datasreservations->date_de_voyage}}" name = "date_de_voyage" placeholder=" votre sexe" >
               </div>
               <div class="mb-3">
                   <label for="recipient-origine" class="col-form-label">Origine</label>
                   <input type="text" class="form-control" id="recipient-origine" value = "{{$datasreservations->origine}}" name = "origine" placeholder="ville de depart" >
               </div>
               <div class="mb-3">
                   <label for="recipient-destination" class="col-form-label">Destination</label>
                   <input type="text" class="form-control" id="recipient-destination" value = "{{$datasreservations->destination}}" name = "destination"placeholder="ville de destination" >
               </div>
               <div class="mb-3">
                   <label for="recipient-payement" class="col-form-label">Payement</label>
                   <input type="text" class="form-control" id="recipient-payement" value = "{{$datasreservations->payement}}" name = "payement" placeholder="payer/non payer" >
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