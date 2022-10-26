@extends('layouts.main')

@section('title', 'Editando Evento')

@section('content')

    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Editando o evento: {{$event->title}}</h1>
        <form action="/events/update/{{$event->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="image">Imagem do evento:</label>
                <input type="file" class="form-control-file" id="image" name="image" placeholder="Imagem do Evento">
                <img src="/img/events/{{$event->image}}" alt="{{$event->title}}" class="img-preview">
            </div>
            <div class="form-group">
                <label for="title">Evento:</label>
                <input type="text" class="form-control" id="title" name="title" value="{{$event->title}}">
            </div>
            <div class="form-group">
                <label for="date">Data do Evento:</label>
                <input type="date" class="form-control" id="date" name="date" value="{{$event->date->format('Y-m-d')}}">
            </div>
            <div class="form-group">
                <label for="city">Cidade:</label>
                <input type="city" class="form-control" id="city" name="city" value="{{$event->city}}">
            </div>
            <div class="form-group">
                <label for="description">O Evento é privado?</label>
                <select name="private" id="private" class="form-control">
                    <option value="0">Não</option>
                    <option value="1" {{ $event->private == 1 ? "selected='selected'" : "" }} >Sim</option>
                </select>
            </div>
            <div class="form-group">
                <label for="description">Descrição evento:</label>
                <textarea name="description" id="description" class="form-control" placeholder="O que acontecerá no evento?">{{$event->description}}</textarea>
            </div>

            <div class="form-group">
                <label for="description">Adicione Itens de infraestrutura:</label>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Cadeiras"> Cadeiras
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Palco"> Palco
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Cerveja grátis"> Cerveja grátis
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Open Food"> Open Food
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Brindes"> Brindes
                </div>
            </div>


            <button type="submit" class="btn btn-primary">Editar evento</button>
        </form>

    </div>

@endsection