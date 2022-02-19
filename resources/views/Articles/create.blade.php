@extends('layout')
@section('content')

    <!-- Big title of article creation page-->
    <div class="page-title">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <h1 id="page-title-text">Create a new blog</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <a href="/articles"><button class="btn btn-light" id="blog_buttons">Cancel</button></a>
        <div class="row g4 justify-content-center">
            <form method="POST" action="/articles">
                @csrf
                <div>
                    <label class="h1-white-bold" for="title">Title:</label><br>
                    <input type="text" id="title" name="title" size="100"><br>
                </div>

                <div>
                    <label class="h1-white-bold" for="excerpt">Excerpt:</label><br>
                    <input type="text" id="excerpt" name="excerpt" size="100"><br>
                </div>

                <div>
                    <label class="h1-white-bold" for="body">Body:</label><br>
                    <textarea id="body" name="body"></textarea><br>
                </div>

                <div>
                    <button class="btn btn-light" id="blog_buttons">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
