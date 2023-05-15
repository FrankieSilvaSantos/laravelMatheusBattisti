@extends('layouts.main')
@section('title','HDC Events')

@section('content')
    

        <h1>Meus Estudos</h1>
        <img src="/img/banner.jpg" alt="">
           
        @if(10 > 5)
        <p>A condição é true</p>
        @endif

        <p>{{$nome}}</p>

        @if($nome=='Pedro')
        <p>O nome é Pedro</p>
        @elseif($nome == 'Franzie')
        <p>P nome é {{$nome}} e elu tem {{$idade}} anos -- Profissao: {{$profissao}}</p>
        @else
        <p>o Nome nao é Pedro</p>
        @endif

        <br>

        <h1>For</h1>
        @for($i = 0; $i < count($array);$i++)

         <p>Value: {{$array[$i]}} - Indice: {{$i}}</p>   
        
        @endfor
        <br>
        <h1>foreach</h1>
        @foreach($namesArray as $nameArray)

        <p>{{$nameArray}} --  Indice {{$loop->index}}</p>

        @endforeach

        <br>
        <p>---------</p>
        
        @php
            $name = 'Frankie';
            echo "$name"

        @endphp
           
           @endsection
   