<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bd-Tek</title>

        <!-- Fonts -->
        <link rel="stylesheet" type="text/css" href="node-modules/bootstrap/dist/css/bootstrap.min.css">

          <link href="{{ asset('/css/style.css') }}" rel="stylesheet">

       
    </head>
    <body>
         
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
              <a class="navbar-brand" href="#"></a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                      <li class="nav-item active">
                        <a class="nav-link" href="http://localhost:8000/collection">Consulter des BD<span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item active">
                        <a class="nav-link" href="http://localhost:8000/decouvrir">Découvrir des BD</a>
                      </li>
                    </ul>
                    <ul class="navbar-nav mr-auto">
                    <form class="form-inline my-2 my-lg-0">
                      <input class="form-control mr-sm-2" type="search" placeholder="Rechercher" aria-label="Rechercher">
                      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Rechercher</button>
                    </form>
                    </ul>
                      <li class="navbar-nav mr-auto">
                        <a class="nav-link" href="http://localhost:8000/connexion">Je me connecte</a>
                      </li>
                  </div>
    </nav>
        <h3>Installez vous confortablement dans notre BD-TEK ......</h3>

        @yield('content')
    
   <h3>Nouveautés</h3>

                <div class="container-fluid">
                    <div class="row">
                      @foreach ($bd as $bd)
                      <div class="col-md-6">
                        <h3 class="titrePresentation"><i><strong>
                          <p>{{ $bd->titre_bd }}</p>
                        </i></strong></h3>
                        <h4><p>{{ $bd->sousTitre_bd }}</p></h4>
                        
                            <img src="{{ $bd->loc_image }}"> 
                            <h4><p>{{ $bd->auteur_bd }}</h4>  
                            <h4><p class="sortie"><strong>DATE DE PARUTION : {{ $bd->dateParution_bd }}
                            </strong></p>
                            
                             
                      </div>
                      @endforeach    
                    </div>
                </div>

            
        
    <script type="text/javascript" src="node-modules/jquery/dist/jquery.min.css"></script>
        <script type="text/javascript" src="node-modules/bootstrap/dist/js/bootstrap.min.js"></script>    
    </body>

</html>
