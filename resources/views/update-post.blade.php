@extends('layouts.app')

@section('content')
<div class="container">
    @if(!empty($post))
        <div style="text-align: justify;">
            <h1>{{$post->title}}</h1>
            <p>{{$post->description}}</p>
            <b>Author: {{$post->user->name}}</b>
        </div>
    @else
        <p>Nenhum post encontrado!</p>
    @endif
</div>
@endsection