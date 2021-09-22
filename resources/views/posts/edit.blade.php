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
  <div class="container-button">
    <button><a href=" {{ route('posts.index') }} ">Tutti i post</a></button>
    </div>

    <form action="{{ route('posts.update', $post) }}" method='POST'>    
        @csrf
        @method('PUT')

        <div class="form-group">
          <label for="title">Titolo</label>
          <input type="text" class="form-control" name="title" id="title" value="{{ $post->title }}">
        </div>
        
        <div class="form-group">
            <label for="author">Autore</label>
            <input type="text" class="form-control" name="author" id="author" value="{{ $post->author }}">
        </div>
        
        <div class="form-group">
          <label for="text_content">Contenuto del post</label>
          <textarea class="form-control" name="text_content" id="text_content" rows="3">{{ $post->text_content }}</textarea>
        </div>

        <div class="form-group">
            <label for="img_path">Url immagine</label>
            <input type="text" class="form-control" name="img_path" id="img_path" value="{{ $post->img_path }}">
        </div>

        <div class="form-group">
          <div class="input-group mb-3">
              <div class="input-group-prepend">
                  <label class="input-group-text" for="category_id">Options</label>
              </div>
              <select class="custom-select" id="category_id" name="category_id">
                  @foreach($categories as $category)
                   @if ($post->category_id === $category->id)
                    <option selected value="{{$category->id}}">{{ $category->name }}</option>                      
                   @else
                     <option value="{{$category->id}}">{{ $category->name }}</option>
                   @endif
                  @endforeach
              </select>
          </div>
        </div>

    
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>


@endsection