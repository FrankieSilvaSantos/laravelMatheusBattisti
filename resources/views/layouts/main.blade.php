<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
   

<!-- Bootstrap-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>



   
    <!-- MDB-->
<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/#[[latestVersion]]#/mdb.min.css"
  rel="stylesheet"
/>

<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.0/mdb.min.js"
></script>





  




    


    <link rel="stylesheet" href="/css/styles.css">
    <script src="/js/scripts.js"></script>

    


</head>



<body>

    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary corNav ">
            <div class="container-fluid ">
                <a class="navbar-brand" href="/"><img class="imgMenu" src="/img/hdcevents_logo.svg"
                        alt=""> Eventos</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                  
                <div class="collapse navbar-collapse navbarPositioning " id="navbarNavAltMarkup">
                    <ul class="navbar-nav ">
                        <li class="nav-item">
                            <a class="nav-link"  href="/events/create">Criar Eventos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Entrar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Cadastrar</a>
                        </li>

                    </ul>
                  </div> 
                
            </div>
        </nav>

    </header>

    <main>
        <div class="container-fluid">
            <div class="row">
                @if (session('msg'))
                    <p class="msg">{{session('msg')}}</p>

                @endif

            </div>

        </div>
    </main>

    
   
    @yield('content')
    <footer style="margin: 20px 0 0 30px">
        <p>HDC Eventss &copy; 2020</p>
    </footer>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>
