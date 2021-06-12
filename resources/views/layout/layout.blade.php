<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title> @yield('title')</title>
   <link 
   rel="stylesheet" 
   href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
   integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
   crossorigin="anonymous">

   <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>

   <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="{{ route('productos.index') }}">Carniceria</a>
      
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    
      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
             @yield('sectionInNav')
        </ul>
        <form class="form-inline my-2 my-lg-0">
          <input class="form-control mr-sm-2" type="search" placeholder="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
    </nav>

   {{-- <nav class="navbar navbar-light" style="background-color: #ff000070;">
      <a class="navbar-brand" href="{{ route('productos.index') }}">Carnicería</a>
      @yield('sectionInNav')
         <button class="navbar-toggler" type="button" data-toggle="collapse"
            data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
               
               <a class="nav-item nav-link disabled" href="#">Contacto</a>
            </div>
         </div>
      </div>
   </nav> --}}
   <hr>
   <div class="container">
      @yield('content')
   </div>


   <footer class="text-center text-white fixed-bottom" style="background-color: #21081a;">
    
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        # texto footer
        <a class="text-white" href="https://bitbucket.org/memosk8/">Memosk8</a>
      </div>

   </footer>

   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" 
   integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" 
   crossorigin="anonymous">
   </script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" 
   integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" 
   crossorigin="anonymous">
   </script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" 
   integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" 
   crossorigin="anonymous">
   </script>
</body>
</html>