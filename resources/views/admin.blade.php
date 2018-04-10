@extends('layouts.master')
@section('content')
    <br>
    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Título</th>
                    <th>Cuerpo</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{!! nl2br($post->body) !!}</td>
                        <td><a href="/edit/{{ $post->id }}"><i class="material-icons">edit</i></a></td>
                    </tr>
                @endforeach            
            </tbody>
        </table>
    </div> 
    <div class="fixed-action-btn">
        <a class="btn-floating btn-large waves-effect waves-light light-blue" href="/create"><i class="material-icons">add</i></a>
    </div>
@endsection