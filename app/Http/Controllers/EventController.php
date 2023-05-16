<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{

    public function index() {
        $idade = 26;
        $nome = 'Franzie';
        $array = [10,20,30,40,50];
        $namesArray = ['matheus','maria','joao','saulo'];
    
        return view('welcome',['nome' => $nome,'idade' => $idade,'profissao' => 'Coder','array' => $array,
    'namesArray' => $namesArray]);
    }

    public function create() {
        return view('events.create');
    }

    public function testeRequest() {
        $busca = request('search');

    return view('testeRequest',['busca' => $busca]);

    }

    public function testGetId($id = null) {
        return view('testGetId',['id' => $id]);
    }

}
