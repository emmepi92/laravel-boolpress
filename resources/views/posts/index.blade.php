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
              <td>
                <a href="{{ route('posts.show', $post)}}"><i class="bi bi-zoom-in"></i></a>
                <a href="{{ route('posts.edit', $post)}}"><i class="bi bi-pencil"></i></a>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{ $post->id }}">
                  <i class="bi bi-trash"></i>
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal{{ $post->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Attenzione</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        Sicuro di voler eliminare il post?
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annulla</button>
                        <form action=" {{ route('posts.destroy', $post) }} " method="POST">
                          @csrf
                          @method('DELETE')                  
                          <button type="submit" class="btn btn-primary">
                            Elimina
                          </button>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </td>
            </tr>
                
            @endforeach
      </table>
</div>
    
@endsection