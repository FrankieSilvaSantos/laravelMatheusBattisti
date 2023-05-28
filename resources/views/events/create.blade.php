@extends('layouts.main')

@section('content')
@section('title','Evento')
    
    <h1 class="tituloCriarEvento">Crie o seu evento</h1>
<form action="/events" method="POST" enctype="multipart/form-data" style="margin: 40px 0 0 30px; width: 900px" >
    @csrf
    <!-- 2 column grid layout with text inputs for the first and last names -->
    
  
    <div class="form-outline">
      <input type="file" id="image"  class="form-control" name="image" />
      <label class="form-label" for="image">Imagem do Evento</label>
    </div>


        <div class="form-outline">
          <input type="text" id="title" class="form-control" name="title" />
          <label class="form-label" for="title">Evento:</label>
        </div>
      
  
    <!-- Text input -->
    <div class="form-outline mb-4">
      <input type="text" id="city" name="city" class="form-control" />
      <label class="form-label" for="city">Cidade:</label>
    </div>

    <!-- select -->

    <div class="form-outline mb-4">

        <select class="form-select" aria-label="Default select example" name="privado" id="privado">
            <option selected>O evento é privado?</option>
            <option value="0">NÃO</option>
            <option value="1">SIM</option>
           
          </select>

    </div>
  
    <!-- Textarea -->
    <div class="form-outline mb-4">
        <textarea class="form-control" id="description" name="description" rows="4"></textarea>
        <label class="form-label" for="description">Descrição</label>
      </div>

      <div class="container" style="margin-bottom: 20px;">

      
        <label class="form-check-label" for="title">Adicione itens de infraestrutura:</label>
        
        <div class="form-check">
        <input class="form-check-input" type="checkbox"  name="items[]" id="items" value="Cadeiras"> Cadeiras
        </div>
        
        <div class="form-check">
        <input class="form-check-input" type="checkbox" name="items[]" id="items" value="Palco"> Palco
        </div>
        
        <div class="form-check">
        <input class="form-check-input" type="checkbox" name="items[]" id="items" value="Cerveja grátis"> Cerveja Grátis
        </div>
       
        <div class="form-check">
        <input class="form-check-input" type="checkbox" name="items[]" id="items" value="Open Food"> Open Food
        </div>

        <div class="form-check">
        <input class="form-check-input" type="checkbox" name="items[]" id="items" value="Brindes"> Brindes
        </div>
      </div>
   
    <!-- Submit button -->
    <button type="submit" class="btn btn-primary btn-block mb-4 buttonCorCriarEventos">Criar Evento</button>
  </form>
    
@endsection