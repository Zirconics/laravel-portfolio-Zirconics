@extends('layout')
@section('content')
    <!-- Big title of Article editing page-->
    <div class="page-title">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <h1 id="page-title-text">Edit a Article</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <a href="/articles"><button class="btn btn-light" id="blog_buttons">Cancel</button></a>
        <div class="row g4 justify-content-center">
            <form method="POST" action="/articles/{{ $article->id }}">
                @csrf
                @method('PUT')

                <div>
                    <label class="h1-white-bold" for="title">Title:</label><br>
                    <input class="form-input" type="text" id="title" name="title" size="100" value="{{ $article->title }}"><br>
                </div>

                <div>
                    <label class="h1-white-bold" for="excerpt">Excerpt:</label><br>
                    <input class="form-input" type="text" id="excerpt" name="excerpt" size="100" value="{{ $article->excerpt }}"><br>
                </div>

                <div>
                    <label class="h1-white-bold" for="body">Body:</label><br>
                    <textarea class="form-input" id="body" name="body">{{ $article->body }}</textarea><br>
                </div>

                <div>
                    <button class="btn btn-light" id="blog_buttons">Submit</button>
                </div>
            </form>

            <form method="POST" action="/articles/{{ $article->id }}">
                @csrf
                @method('DELETE')
                <button class="btn btn-light" id="blog_buttons">Delete</button>
            </form>
        </div>
    </div>
@endsection
