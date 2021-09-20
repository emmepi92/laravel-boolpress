@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    {{ __('Dashboard') }}
                    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        @foreach ($posts as $post)
        <div class="col-4 card">
            <img src="{{ $post->img_path }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"> {{ $post->title }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{ $post->author }}, {{ $post->created_at }}</h6>
                <p class="card-text">{{ $post->text_content }}</p>
              </div>
        </div>
            
        @endforeach

    </div>

</div>
@endsection
