@extends('layouts.app')

@section('content')
<div class="container">
    @if (isset($posts))
        @foreach($posts as $post)
            <div>
                <h1>{{$post->title}}</h1>
                <p>{{$post->description}}</p>
                <b>Author: {{$post->user->name}}</b>
                <br>
            </div>
        @endforeach
    @else
        <p>Nenhum post encontrado!</p>
    @endif
</div>
@endsection
