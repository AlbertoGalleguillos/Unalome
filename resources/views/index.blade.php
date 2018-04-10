@extends('layouts.master')
@section('content')
    <br>
    <div class="container">
        @foreach($posts as $post)
            <div class="row">
                <div class="col s12 m8">
                    <div class="card">
                        <div class="card-content">
                            <span class="card-title">{{ $post->title }}</span>
                            <p>{!! nl2br($post->body) !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach            
    </div>
@endsection