<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Teste;
use Illuminate\Http\UploadedFile;

class EventController extends Controller
{

    public function index() {
        $events = Event::all(); #pegando todos os eventos 
    
        return view('welcome',['events' => $events]);
    }

    public function create() {
        $events = Event::all(); #pegando todos os eventos 
        return view('events.create',['events' => $events]);
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

    public function store(Request $request ) {
        $event = new Event;

        $event->title = $request->title;
        $event->city = $request->city;
        $event->privado = $request->privado;
        $event->description = $request->description;
        $event->items = $request->items;

        if($request->hasFile('image') and $request->file('image')->isValid()) {
            $requestImage = $request->image;
            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName(). strtotime('now')). ".". $extension;

            $requestImage->move(public_path('/img/events'),$imageName);

            $event->image = $imageName;
        }

        $event->save();

        return redirect('/')->with('msg','Mensagem criada com sucesso!!');

    }

    public function testGetImage() {

        return view('testgetimage');
    }

    public function storeImage(Request $request) {

        $requestImage = $request->all();

        if($request->hasFile('image')) {
            $destination_path = 'public/img/tests';
            $image = $request->file('image');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('image')->storeAs($destination_path,$image_name);

            $requestImage['image'] = $image_name;
        }
        return redirect('/testgetimage')->with('msgTestGetImage','mensagem enviada com sucesso!!');
    }

    public function show($id) {

        $event = Event::findOrFail($id);
        
        return view('events.show',['event' => $event]);
    }





}
