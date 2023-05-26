@extends('layouts.main')
@section('title','HDC Events')

@section('content')
    

<div class="main d-flex justify-content-center">
      
    <div class="main2 ">
      <div class="overlayImg">
      
      
      <div class="d-flex justify-content-center ">
      <div class="containerBusca ">
    <h1 class="tituloBusca" style="margin-top: 20px">Busque um evento</h1>
    <div class="containerForm" style="margin-top: 20px;">
    <form action="">
      
        <div class="input-group " style="margin-left: 10px; max-width: 100%;">
          <div class="">
            <div class="form-outline" >
                <input type="search" id="form1" class="form inputSearch"  placeholder="pesquisar"  />
            </div>
                <div class="buttonContainer">
                  
                <button type="button" class="btn btn-primary buttonPositioning" style="margin-top: 10px;  padding: 20px 100px;">
                  <i class="fas fa-search"></i>
              </button>
            </div>
          </div>
        </div>
        
        </div>
        </div>
    </div>
  </div>


        
        <form>


          <h2 class="tituloEventos">Próximos Eventos</h2>
          @foreach ($events as $event)

          <div class="containerCardPositioning3">
          <div class="containerCardPositioning2">
            <div class="ContainerCardpositioning ">
             
              
            <div class="card cardPositioning " style="width: 18rem; margin: 0 10px 0 10px; margin-top: 20px">
              
                <img src="img/events/{{$event->image}}" class="card-img-top" alt="...">
              
                <div class="card-body ">
                  
                    <h5 class="card-title">{{$event->title}}</h5>
                    <p class="card-text">{{$event->city}}</p>
                    <p class="card-text">{{$event->description}}</p>
                    <a href="#" class="btn btn-primary buttonCorCard">Saber Mais</a>
                    </div>
                  </div>
            
          </div>
        </div>
      </div>
          @endforeach

    </form>
  </div>
</div>
           
        
           
           @endsection
   