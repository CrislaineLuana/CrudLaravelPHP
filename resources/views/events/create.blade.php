@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')

    <div id="event-criate-container" class="col-md-6 offset-md-3">
        <h1>Crie o seu evento</h1>
        <form action="/events" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Evento:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Nome do Evento">
            </div>
            <div class="form-group">
                <label for="city">Cidade:</label>
                <input type="city" class="form-control" id="city" name="city" placeholder="Local do Evento">
            </div>
            <div class="form-group">
                <label for="description">O Evento é privado?</label>
                <select name="private" id="private" class="form-control">
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
            </div>
            <div class="form-group">
                <label for="description">Descrição evento:</label>
                <textarea name="description" id="description" class="form-control" placeholder="O que acontecerá no evento?"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Criar um evento</button>
        </form>

    </div>

@endsection