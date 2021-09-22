@extends('layouts.app')

@section('content')
<div class="container container-button">
    <button><a href=" {{ route('posts.index') }} ">Tutti i post</a></button>
</div>

<div class="container">
    <h1>{{ $post->title }}</h1>
    <div class="detail-box">
        <div>Scritto da: {{$post->author}}</div>
        <div>Pubblicato il: {{ $post->created_at}}</div>
        <div>Categoria: {{ $post->category->name }}</div>
    </div>
    <p>{{ $post->text_content }}</p>
    <img src="{{ $post->img_path }}" alt="">

</div>

@endsection