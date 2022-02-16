@extends('layout')

@section('content')
    <main>

        <!-- Big title of Blog page-->
        <div class="page-title">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <h1 id="page-title-text">Blog</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <a href="blogs/create"><button class="btn btn-light" id="blog_buttons">Create</button></a>
            <div class="row g4 justify-content-center">

        @foreach($articles as $article)
            <div class="col-md-4">
                <div class="card bg-light mb-3">
                    <div class="card-header">
                        <a class="text-link-hover-black" href="/blogs/{{ $article->id }}">{{ $article->title }}</a>
                    </div>
                    <div class="card-body">
                        <p>{{ $article->excerpt }}</p>
                    </div>
                </div>
            </div>
        @endforeach

            </div>
        </div>
    </main>
@endsection
