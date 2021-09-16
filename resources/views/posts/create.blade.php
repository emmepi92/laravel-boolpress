@extends('layouts.app')

@section('content')
<div class="container">
  @if ($errors->any())
      <ul>
        @foreach ($errors->all() as $error)
            <li> {{ $error }}</li>
        @endforeach
      </ul>
  @endif

    <form action="{{ route('posts.store') }}" method='post'>    
        @csrf

        <div class="form-group">
          <label for="title">Titolo</label>
          <input type="text" class="form-control" name="title" id="title">
        </div>
        
        <div class="form-group">
            <label for="author">Autore</label>
            <input type="text" class="form-control" name="author" id="author">
        </div>
        
        <div class="form-group">
          <label for="text_content">Contenuto del post</label>
          <textarea class="form-control" name="text_content" id="text_content" rows="3"></textarea>
        </div>

        <div class="form-group">
            <label for="img_path">Url immagine</label>
            <input type="text" class="form-control" name="img_path" id="img_path">
          </div>
    
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>


@endsection
