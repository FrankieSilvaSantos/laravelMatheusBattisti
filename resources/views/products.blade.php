@extends('layouts.main')

@section('content')
    

<h1>Tela de Produtos</h1>

@if($busca != '') 

<p>O usuario está buscando por {{$busca}}</p>

@endif


@endsection