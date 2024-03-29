@extends('layout')
@section('content')
    <main>
        <!-- Big title of grades page-->
        <div class="page-title">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <h1 id="page-title-text">{{ $grade->course_name }}</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="buttons">
                <a href={{ route('grades.index') }}><button class="btn btn-light" id="blog_buttons">Back</button></a>
                @if(Auth::check())
                    <a href={{ route('grades.edit', $grade) }}><button class="btn btn-light" id="blog_buttons">Edit</button></a>
                @endif
                <hr>
            </div>

            <div class="row g-4 justify-content-center">
                <div class="col-md-12">
                    <div class="card bg-light mb-3">
                        <div class="card-header">{{ $grade->test_name }}</div>
                        <div class="card-body">
                            <p class="card-text">
                                Grade: {{ $grade->best_grade }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>
@endsection
