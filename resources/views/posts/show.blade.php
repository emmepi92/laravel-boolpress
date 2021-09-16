@extends('layouts.app')

@section('content')
<div class="container container-button">
    <button><a href=" {{ route('posts.index') }} ">Tutti i post</a></button>
  </div>

<div class="container">
    <h3>Autore: {{$post->author}}</h3>
    <p>{{ $post->text_content }}</p>
    <img src="{{ $post->img_path }}" alt="">
    <div>Pubblicato il: {{ $post->created_at}}</div>

</div>

@endsection