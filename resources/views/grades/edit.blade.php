@extends('layout')
@section('content')
<!-- Big title of grade editing page-->
<div class="page-title">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h1 id="page-title-text">Edit a grade</h1>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <a href={{ route('grades.show', $grade) }}><button class="btn btn-light" id="blog_buttons">Cancel</button></a>
    <div class="row g4 justify-content-center">
        <form class="row g-3 was-validated" method="POST" action={{ route('grades.update', $grade) }}>
            @csrf
            @method('PUT')
            <div class="col-md-12">
                <label for="validationCustom01" class="form-label h1-white-bold">Course id:</label>
                <input type="text" class="form-control" id="course_id" placeholder="Enter course id"
                       value="{{ $grade->course_id }}" name="course_id" required>
                <div class="invalid-feedback">
                    Please provide a course id.
                </div>
            </div>
            <div class="col-md-12">
                <label for="validationCustom02" class="form-label h1-white-bold">Test name:</label>
                <input type="text" class="form-control" id="test_name" placeholder="Enter Test name"
                       value="{{ $grade->test_name }}" name="test_name" required>
                <div class="invalid-feedback">
                    Please provide a test name.
                </div>
            </div>
{{--            <div class="col-md-3">--}}
{{--                <label for="validationCustom03" class="form-label h1-white-bold">EC:</label>--}}
{{--                <input type="number" class="form-control" id="ec" placeholder="Enter EC"--}}
{{--                       value="{{ $grade->ec }}" name="ec" required>--}}
{{--                <div class="invalid-feedback">--}}
{{--                    Please provide a EC value.--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="col-md-3">
                <label for="validationCustom04" class="form-label h1-white-bold">Grade:</label>
                <input type="text" class="form-control" id="best_grade" placeholder="Enter grade"
                       value="{{ $grade->best_grade }}" name="best_grade" required>
                <div class="invalid-feedback">
                    If grade is not known enter 0.
                </div>
            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Submit form</button>
            </div>
        </form>

        <form method="POST" action={{ route('grades.delete', $grade) }}>
            @csrf
            @method('DELETE')
            <button class="btn btn-light" id="blog_buttons">Delete</button>
        </form>
    </div>
</div>
@endsection
