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

            <form class="row g-3 needs-validation" method="POST" action="/articles">
                @csrf
                <div class="col-md-12 position-relative">
                    <label for="validationTooltip01" class="form-label h1-white-bold">Title</label>
                    <input type="text" class="form-control" id="validationTooltip01" name="title" required>
                    <div class="invalid-tooltip">
                        Please provide a title.
                    </div>
                </div>
                <div class="col-md-12 position-relative">
                    <label for="validationTooltip02" class="form-label h1-white-bold">Excerpt</label>
                    <input type="text" class="form-control" id="validationTooltip02" name="excerpt" required>
                    <div class="invalid-tooltip">
                        Please provide an excerpt.
                    </div>
                </div>
                <div class="col-md-12 position-relative">
                    <label for="validationTooltip03" class="form-label h1-white-bold">Body</label>
                    <input type="text" class="form-control" id="validationTooltip03" name="body" required>
                    <div class="invalid-tooltip">
                        Please provide a body.
                    </div>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Submit form</button>
                </div>
            </form>
        </div>
    </div>
@endsection
