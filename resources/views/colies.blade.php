@extends('layout.app')
@section('content')
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu slide">
                        <div class="nav">
                            <!-- <div class="sb-sidenav-menu-heading">Core</div> -->
                            <a class="nav-link" href="/dashbord">
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
                            <a class="nav-link" href="#">
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
                        <h1 class="mt-4">Les Colies</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tables</li>
                        </ol>
                        <!-- <div class="card mb-4">
                            <div class="card-body">
                                DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                                <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                                .
                            </div>
                        </div> -->
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                               Tables des colies
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                <thead>
                                        <tr>
                                            <th>id</th>
                                            <th>Envoyeur</th>
                                            <th>Recepteur</th>
                                            <th>Telephone</th>
                                            <th>Origine</th>
                                            <th>Destination</th>
                                            <th>Status</th>
                                            <th>Date de reception</th>
                                            <th>Chauffeur</th>
                                            <th>Payement</th>
                                            <th>Created_at</th>
                                            <th>Updated_at</th>
                                            <th>Action</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                    
                               
                                        <tbody >
                                            @foreach ($datascolis as $datascoli)
                                            <tr>
                                                {{-- <td>{{$datascoli->id}}</td> --}}
                                               {{-- <td>{{$loop->index+1}}</td>  --}}
                                                <td>{{$datascoli->id}}</td>
                                                <td>{{$datascoli->envoyeur}}</td>
                                                <td>{{$datascoli->recepteur}}</td>
                                                <td>{{$datascoli->telephone}}</td>
                                                <td>{{$datascoli->origine}}</td>
                                                <td>{{$datascoli->destination}}</td>
                                                <td>{{$datascoli->status}}</td>
                                                <td>{{$datascoli->date_de_reception}}</td>
                                                <td>{{$datascoli->nom_du_chauffeur}}</td>
                                                <td>{{$datascoli->payement}}</td>
                                                <td>{{$datascoli->created_at}}</td>
                                                <td>{{$datascoli->updated_at}}</td>
                                                <td><a href="{{url('editcolis/'.$datascoli->id)}}" class="edite">editer</td>
                                                <td><a href="{{url('deletecolis/'.$datascoli->id)}}"class="supprime">supprimer</td>
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
        
