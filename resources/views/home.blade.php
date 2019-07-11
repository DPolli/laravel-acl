@extends('layouts.app')

@section('content')
<div class="container">
    @forelse($posts as $post)
        <div>
            <h1>{{$post->title}}</h1>
            <p>{{$post->description}}</p>
            <b>Author: {{$post->user->name}}</b>
            <br>
            <hr>
        </div>
    @empty
        <p>Nenhum post encontrado!</p>
    @endforelse
</div>
@endsection
