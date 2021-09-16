@extends('layouts.app')

@section('content')
<div class="container container-button">
  <button><a href=" {{ route('posts.create') }} ">Nuovo post</a></button>
</div>

<div class="container">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Titolo</th>
            <th scope="col">Autore</th>
            <th scope="col">Data</th>
            <th scope="col"></th>

          </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
            <tr>
              <th scope="row">{{ $post->id }}</th>
              <td>{{ $post->title }}</td>
              <td>{{ $post->author }}</td>
              <td>{{ $post->created_at }}</td>
              <td><a href="{{ route('posts.show', $post)}}"><i class="bi bi-zoom-in"></i></a></td>
            </tr>
                
            @endforeach
      </table>
</div>
    
@endsection