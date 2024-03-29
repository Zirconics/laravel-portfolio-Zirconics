@extends('layout')
@section('content')

    <!-- Big title of article creation page-->
    <div class="page-title">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <h1 id="page-title-text">Create a new article</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <a href={{ route('articles.index') }}><button class="btn btn-light" id="blog_buttons">Cancel</button></a>
        <div class="row g-3 justify-content-center">
            <form class="row g-3 needs-validation" method="POST" action="{{ route('articles.index') }}" novalidate>
                @csrf
                <div class="col-md-12">
                    <div class="d-flex justify-content-between">
                        <label for="validationCustom01" class="form-label h1-white-bold">Title:<span class="red"> *</span></label>
                        <p class="text-white"><span class="red">* </span>= verplicht</p>
                    </div>
                    <input type="text" class="form-control" id="title" placeholder="Enter title" name="title" required>
                    <div class="invalid-feedback">
                        <span class="validation-feedback">
                            Please provide a title.
                        </span>
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="validationCustom02" class="form-label h1-white-bold">Excerpt:<span class="red"> *</span></label>
                    <input type="text" class="form-control" id="excerpt" placeholder="Enter excerpt" name="excerpt" required>
                    <div class="invalid-feedback">
                        <span class="validation-feedback">
                            Please provide an excerpt that briefly explains your post.
                        </span>
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="validationCustom02" class="form-label h1-white-bold">Body:<span class="red"> *</span></label>
                    <textarea type="text" class="form-control form-input" id="body" placeholder="Enter body" name="body" required></textarea>
                    <div class="invalid-feedback">
                        <span class="validation-feedback">
                            Please provide a body.
                        </span>
                    </div>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Submit form</button>
                </div>
            </form>
        </div>
    </div>
@endsection


