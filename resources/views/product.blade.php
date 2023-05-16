@extends('layouts.main')

@section('title', 'Produto')


@section('content')

    @if($id != null)
    <p>Exibindo produto ID: {{ $id }}</p>
    @endif

@endsection
