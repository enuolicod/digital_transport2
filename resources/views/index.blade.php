@extends('layout.app')

@section('content')
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu slide">
                        <div class="nav">
                            <!-- <div class="sb-sidenav-menu-heading">Core</div> -->
                            <a class="nav-link" href="#">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <!-- <div class="sb-sidenav-menu-heading">Addons</div> -->
                            <a class="nav-link" href="/charts">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Charts
                            </a>
                            <a class="nav-link" href="/reservation">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Reservations
                            </a>
                            <a class="nav-link" href="/colies">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Colies 
                            </a>
                            <a class="nav-link" href="/courriers">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                               courriers 
                            </a>
                        </div>
                    </div>
                    
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-4 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body"> Reservation</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#"> Totals</a>
                                        <span class= "count"> {{$totalreservations}}</span>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                                    
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Colis</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Totals</a>
                                        <span class= "count">{{$totalcolis}}</span>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Courrier</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Totals</a>
                                        <span class= "count">{{$totalcourriers}}</span>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <!-- button et boites modal -->
                        
                          
                          <span ><button type="button" class="service" data-bs-toggle="modal" data-bs-target="#reservation">{{$datas[0]->name}}</button></span>
                         
                          <div class="modal fade" id="reservation" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Formulaire d'enregistrement</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body" id = "reservation">
                                    <form method = "POST" action="{{route('enregistrement')}}">
                                        @csrf
                                        <h2>Les Reservation</h2>
                                        <div class="mb-3">
                                            <label for="recipient-nom" class="col-form-label">Nom</label>
                                            <input type="text" class="form-control" id="recipient-nom" name = "nom"  placeholder="veuillez entrer votre nom" >
                                        </div>
                                      
                                        <div class="mb-3">
                                            <label for="recipient-prenom" class="col-form-label">Prenom</label>
                                            <input type="text" class="form-control" id="recipient-prenom" name = "prenom" placeholder="veuillez entrer votre prenom" >
                                        </div>
                                        <div class="mb-3">
                                            <label for="recipient-naissance" class="col-form-label">Date de naissance</label>
                                            <input type="date" class="form-control" id="recipient-naissance" name = "date_de_naissance" placeholder=" votre date de naissance" >
                                        </div>
                                        <div class="mb-3">
                                            <label for="recipient-tel" class="col-form-label">Telephone</label>
                                            <input type="text" class="form-control" id="recipient-tel" name = "telephone" placeholder=" votre numero de telephone" >
                                        </div>
                                        <div class="mb-3">
                                            <label for="recipient-sexe" class="col-form-label">Sexe</label>
                                            <input type="text" class="form-control" id="recipient-sexe" name = "sexe" placeholder=" votre sexe" >
                                        </div>
                                        <div class="mb-3">
                                            <label for="recipient-voyage" class="col-form-label">Date de voyage</label>
                                            <input type="date" class="form-control" id="recipient-voyage" name = "date_de_voyage" placeholder=" votre sexe" >
                                        </div>
                                        <div class="mb-3">
                                            <label for="recipient-origine" class="col-form-label">Origine</label>
                                            <input type="text" class="form-control" id="recipient-origine" name = "origine" placeholder="ville de depart" >
                                        </div>
                                        <div class="mb-3">
                                            <label for="recipient-destination" class="col-form-label">Destination</label>
                                            <input type="text" class="form-control" id="recipient-destination" name = "destination"placeholder="ville de destination" >
                                        </div>
                                        <div class="mb-3">
                                            <label for="recipient-payement" class="col-form-label">Payement</label>
                                            <input type="text" class="form-control" id="recipient-payement" name = "payement" placeholder="payer/non payer" >
                                        </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-primary">Send message</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            </div>

                             <span ><button type="button" class="service" data-bs-toggle="modal" data-bs-target="#colis"  >{{$datas[1]->name}}</button></span>
                         
                          <div class="modal fade" id="colis" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Formulaire d'enregistrement</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body" id = "colis">

                                    <form method = "POST" action="{{route('enregistrement_colis')}}">
                                        @csrf
                                        <h2>Les Colies</h2>
                                        <div class="mb-3">
                                            <label for="recipient-envoyeur" class="col-form-label">Envoyeur</label>
                                            <input type="text" class="form-control" id="recipient-envoyeur" name= "envoyeur" placeholder=" nom de l'envoyeur" >
                                        </div>
                                        <div class="mb-3">
                                            <label for="recipient-recepteur" class="col-form-label">Recepteur</label>
                                            <input type="text" class="form-control" id="recipient-recepteur" name="recepteur" placeholder=" nom du recepteur" >
                                        </div>
                                        <div class="mb-3">
                                            <label for="recipient-telephone" class="col-form-label">Telephone</label>
                                            <input type="text" class="form-control" id="recipient-telephone" name="telephone" placeholder="numero de telephone de l'envoyeur et du recepteur" >
                                        </div>
                                        <div class="mb-3">
                                            <label for="recipient-origine" class="col-form-label">Origine</label>
                                            <input type="text" class="form-control" id="recipient-origine" name ="origine" placeholder="ville de depart" >
                                        </div>
                                        <div class="mb-3">
                                            <label for="recipient-destination" class="col-form-label">Destination</label>
                                            <input type="text" class="form-control" id="recipient-destination" name = "destination" placeholder="ville de destination" >
                                        </div>
                                        <div class="mb-3">
                                            <label for="recipient-status" class="col-form-label">Status</label>
                                            <input type="text" class="form-control" id="recipient-status" name = "status" placeholder="colis envoyer et bien reçu" >
                                        </div>
                                        <div class="mb-3">
                                            <label for="recipient-reception" class="col-form-label">Date de reception</label>
                                            <input type="date" class="form-control" id="recipient-reception" name="date_de_reception" placeholder="colis envoyer et bien reçu" >
                                        </div>
                                        <div class="mb-3">
                                            <label for="recipient-chauffeur" class="col-form-label">Chauffeur</label>
                                            <input type="text" class="form-control" id="recipient-chauffeur" name = "nom_du_chauffeur" placeholder="nom du chauffeur" >
                                        </div>
                                        <div class="mb-3">
                                            <label for="recipient-payer" class="col-form-label">Payement</label>
                                            <input type="text" class="form-control" id="recipient-payer" name ="payement" placeholder="veuillez entrer votre nom" >
                                        </div>
                                        
                                  
                                 </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Send message</button>
                                </div>
                            </form>
                                </div>
                            </div>
                            </div>

                            <span ><button type="button" class="service" data-bs-toggle="modal" data-bs-target="#courrier"  >{{$datas[2]->name}}</button></span>
                         
                          <div class="modal fade" id="courrier" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Formulaire d'enregistrement</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body" id = "courrier">
                                    
                                    <form method = "POST" action="{{route('enregistrement_courriers')}}">
                                        @csrf
                                        <h2>Les Courriers</h2>
                                        <div class="mb-3">
                                            <label for="recipient-envoyeur" class="col-form-label">Envoyeur</label>
                                            <input type="text" class="form-control" id="recipient-envoyeur" name= "envoyeur" placeholder=" nom de l'envoyeur" >
                                        </div>
                                        <div class="mb-3">
                                            <label for="recipient-recepteur" class="col-form-label">Recepteur</label>
                                            <input type="text" class="form-control" id="recipient-recepteur" name="recepteur" placeholder=" nom du recepteur" >
                                        </div>
                                        <div class="mb-3">
                                            <label for="recipient-telephone" class="col-form-label">Telephone</label>
                                            <input type="text" class="form-control" id="recipient-telephone" name="telephone" placeholder="numero de telephone de l'envoyeur et du recepteur" >
                                        </div>
                                        <div class="mb-3">
                                            <label for="recipient-origine" class="col-form-label">Origine</label>
                                            <input type="text" class="form-control" id="recipient-origine" name ="origine" placeholder="ville de depart" >
                                        </div>
                                        <div class="mb-3">
                                            <label for="recipient-destination" class="col-form-label">Destination</label>
                                            <input type="text" class="form-control" id="recipient-destination" name = "destination" placeholder="ville de destination" >
                                        </div>
                                        <div class="mb-3">
                                            <label for="recipient-status" class="col-form-label">Status</label>
                                            <input type="text" class="form-control" id="recipient-status" name = "status" placeholder="colis envoyer et bien reçu" >
                                        </div>
                                        <div class="mb-3">
                                            <label for="recipient-reception" class="col-form-label">Date de reception</label>
                                            <input type="date" class="form-control" id="recipient-reception" name="date_de_reception" placeholder="colis envoyer et bien reçu" >
                                        </div>
                                        <div class="mb-3">
                                            <label for="recipient-chauffeur" class="col-form-label">Chauffeur</label>
                                            <input type="text" class="form-control" id="recipient-chauffeur" name = "nom_du_chauffeur" placeholder="nom du chauffeur" >
                                        </div>
                                        <div class="mb-3">
                                            <label for="recipient-payer" class="col-form-label">Payement</label>
                                            <input type="text" class="form-control" id="recipient-payer" name ="payement" placeholder="veuillez entrer votre nom" >
                                        </div>
                                        
                                  
                                 </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Send message</button>
                                </div>
                            </form>
                                </div>
                            </div>
                            </div>
                                    
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar me-1"></i>
                                        Statistic des revenus
                                    </div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Données dans la base
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Nom</th>
                                            <th>Prenom</th>
                                            <th>Date de naissance</th>
                                            <th>Telephone</th>
                                            <th>Sexe</th>
                                            <th>Date de voyage</th>
                                            <th>Origine</th>
                                            <th>Destination</th>
                                            <th>Payement</th>
                                            <th>Created_at</th>
                                            <th>Updated_at</th>
                                            <th>Action</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody >
                  @foreach ($datasreservations as $datasreservation)
                  <tr>
                      {{-- <td>{{$datascoli->id}}</td> --}}
                     {{-- <td>{{$loop->index+1}}</td>  --}}
                      <td>{{$datasreservation->id}}</td>
                      <td>{{$datasreservation->nom}}</td>
                      <td>{{$datasreservation->prenom}}</td>
                      <td>{{$datasreservation->date_de_naissance}}</td>
                      <td>{{$datasreservation->telephone}}</td>
                      <td>{{$datasreservation->sexe}}</td>
                      <td>{{$datasreservation->date_de_voyage}}</td>
                      <td>{{$datasreservation->origine}}</td>
                      <td>{{$datasreservation->destination}}</td>
                      <td>{{$datasreservation->payement}}</td>
                      <td>{{$datasreservation->created_at}}</td>
                      <td>{{$datasreservation->updated_at}}</td>
                      <td><a href="{{url('edit/'.$datasreservation->id)}}" class="edite">editer</td>
                     <td><a href="{{url('delete/'.$datasreservation->id)}}"class="supprime">supprimer</td>
                    </tr>
                  @endforeach
                </tbody>
                    
                                   
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy;M&T,2022</div>
                            
                        </div>
                    </div>
                </footer>
            </div>
        </div>

     @endsection
        