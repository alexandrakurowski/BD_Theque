<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bd-Tek</title>

        <!-- Fonts -->
        <link rel="stylesheet" type="text/css" href="node-modules/boostrap/dist/css/boostrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

       
    </head>
    <body>
         

        <h1>Installez vous confortablement dans notre BD-TEK ......</h1>

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

            
        
    <script type="text/javascript" src="node-modules/jquery"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>    
    </body>

</html>
