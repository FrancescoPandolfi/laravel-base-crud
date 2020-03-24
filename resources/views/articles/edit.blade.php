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
                    <input type="text" name="title" class="form-control" value="{{$article->title}}">
                </div>

                <div class="form-group">
                    <label for="author">Author</label>
                    <input type="text" name="author" class="form-control" value="{{$article->author}}">
                </div>

                <div class="form-group">
                <label for="body">Body</label>
                <textarea class="form-control" name="body" rows="5">{{$article->body}}</textarea>
                </div>

                <div class="form-group">
                    <label for="img">Image path</label>
                    <input type="text" name="img" class="form-control" value="{{$article->img}}">
                </div>

                <button type="submit" class="btn btn-primary">Send</button>

            </form>

        </div>
    </div>
</div>

@endsection