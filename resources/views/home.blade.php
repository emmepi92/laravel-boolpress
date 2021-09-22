@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        @foreach ($posts as $post)
        <div class="col-4 card">
            <a class="no-decorations" href="{{ route('posts.show', $post)}}">
                <img src="{{ $post->img_path }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title"> {{ $post->title }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $post->author }}, {{ $post->created_at }}</h6>
                    <p class="card-text">{{ $post->text_content }}</p>
                </div>
            </a>
        </div>
            
        @endforeach

    </div>

</div>
@endsection
