@extends('layouts.layout')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">

            <h1>Insert new article</h1>

        <form method="POST" action="{{route('articles.store')}}">
                @csrf
                {{-- @method('POST') --}}
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control">
                </div>

                <div class="form-group">
                    <label for="author">Author</label>
                    <input type="text" name="author" class="form-control">
                </div>

                <div class="form-group">
                <label for="body">Body</label>
                <textarea class="form-control" name="body" rows="5"></textarea>
                </div>

                <div class="form-group">
                    <label for="img">Image path</label>
                    <input type="text" name="img" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">Send</button>

            </form>

        </div>
    </div>
</div>

@endsection