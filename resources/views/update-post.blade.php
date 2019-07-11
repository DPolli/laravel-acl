@extends('layouts.app')

@section('content')
<div class="container">
    @if($post != null)
        <div>
            <h1>{{$post->title}}</h1>
            <p>{{$post->description}}</p>
            <b>Author: {{$post->user->name}}</b>
        </div>
    @else
        <p>Nenhum post encontrado!</p>
    @endif
</div>
@endsection