@extends('layouts.layout')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">

            <h1>Edit article</h1>

        <form method="POST" action="{{route('articles.update', $article->id)}}">
                @csrf
                @method('PUT')
        
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{$article->title}}">
                    @error('title')
                        <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="author">Author</label>
                    <input type="text" name="author" class="form-control @error('author') is-invalid @enderror" value="{{$article->author}}">
                    @error('author')
                        <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="body">Body</label>
                    <textarea class="form-control @error('body') is-invalid @enderror" name="body" rows="5">{{$article->body}}</textarea>
                    @error('body')
                        <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="img">Image path</label>
                    <input type="text" name="img" class="form-control @error('img') is-invalid @enderror" value="{{$article->img}}">
                    @error('img')
                        <small class="form-text text-danger">{{$message}}</small>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Send</button>

            </form>

        </div>
    </div>
</div>

@endsection