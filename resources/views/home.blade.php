@extends('layouts.app')

@section('content')
<div class="container">
    @forelse($posts as $post)
        @can('view_post', $post)
            <div style="text-align: justify;">
                <h1>{{$post->title}}</h1>
                <p>{{$post->description}}</p>
                <b>Author: {{$post->user->name}}</b>
                {{-- Tambem é possivel restringir o acesso dentro da view --}}
                    <br><a href='{{url("/post/$post->id/update")}}'>Editar</a>
                <br>
                <hr>
            </div>
        @endcan
    @empty
        <p>Nenhum post encontrado!</p>
    @endforelse
</div>
@endsection
