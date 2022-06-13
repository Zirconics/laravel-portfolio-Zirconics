@extends('layout')
@section('content')
    <main>

        <!-- Big title of dashboard page-->
        <div class="page-title">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10">
                        <h1 id="page-title-text">Jikan API</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="container ">
            <div class="row justify-content-center align-items-start">
                <div class="col-lg-10 col-md-10 col-sm-10 intro">
                    <div class="intro-subtext" id="Statistics"></div>
                </div>
            </div>
        </div>



    </main>
@endsection
@section('script')
    <script src="js/jikan.js"></script>
@endsection
