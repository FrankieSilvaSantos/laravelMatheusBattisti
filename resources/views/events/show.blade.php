@extends('layouts.main')

@section('title','$event->title')
@section('content')


<div class="container-sm ">

    <div class="container-sm d-flex container-saiba-mais">

<div class="container-sm ">

    <img src="/img/events/{{$event->image}}" class="img-fluid image-container" alt="...">

</div>

<div class="container-sm info-container">

    <h1>{{$event->title}}</h1>
    <p class="event-city"><ion-icon name="location-outline" class="ion-icon"></ion-icon>{{$event->city}}</p>
    <p class="events-participants"><ion-icon name="people-outline" class="ion-icon"></ion-icon>x Participants</p>
    <p class="event-owner"><ion-icon name="star-outline" class="ion-icon"></ion-icon>Dono do evento</p>
    

    <a href="#" class="btn btn-primary button-cor-saiba-mais" id="event-submit">Confirmar Presença</a>

</div>
</div>


<div class="container-sm description-container" style="margin-top: 20px;">
    <h3>Sobre o Evento:</h3>

    <p class="event-description">{{$event->description}}</p>


</div>

</div>
    

    
@endsection