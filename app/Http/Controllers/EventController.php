<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Teste;

class EventController extends Controller
{

    public function index() {
        $events = Event::all(); #pegando todos os eventos 
    
        return view('welcome',['events' => $events]);
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

    public function testDb() {
        $events = Teste::all();
        
        return view('testDb',['events' => $events]);
    }

}
