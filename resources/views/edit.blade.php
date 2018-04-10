@extends('layouts.master')
@section('content')
    <div class="container center">
    <br>        
    <h5><a href="/admin" class="left">Admin</a><div class="left-align">&nbsp; /&nbsp; Id: {{ $post->id }}</div></h5>
        <form method="POST" action="/edit/{{ $post->id }}">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}
            <div class="card">
                <div class="card-content">
                    <div class="input-field col s12">
                        <input id="title" name="title" type="text" class="validate" required value="{{ $post->title }}">
                        <label for="title">Título</label>
                    </div>
                    <div class="input-field col s12">
                        <textarea id="body" name="body" class="materialize-textarea" required>{{ $post->body }}</textarea>
                        <label for="body">Cuerpo</label>
                    </div>
                    <button class="waves-effect waves-light btn light-blue"><i class="material-icons left">save</i>Guardar</button>
                </div>
            </div>        
        </form>
    </div> 
@endsection