<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">

    <title>Kevin - Portfolio</title>
</head>

<body>
<!-- navbar -->
<nav class="navbar navbar-expand-md sticky-top navbar-dark bg-dark">
    <div class="container-xxl">
        <!-- Page title / brand -->
        <a href="/" class="navbar-brand">
            <img src="/img/logoHZ.png" alt="logo hz" />
        </a>

        <!-- collapsed navbar button (mobile) -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-nav"
                aria-controls="main-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar links -->
        <div class="collapse navbar-collapse justify-content-end align-center" id="main-nav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="/dashboard">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/profile">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/faq">FaQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="overview">Blog</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

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

    <!-- Blog posts -->
    <div class="container">
        <div class="row g4 justify-content-center">

            <!-- Study Choice blog post -->
            <div class="col-md-4">
                <div class="card bg-light mb-3">
                    <div class="card-header">Study Choice</div>
                    <img class="card-img-top" src="/img/studyChoice.jpg" alt="Study Choice">
                    <div class="card-body">
                        <p class="card-text">
                            <a href="Study-Choice" class="text-link-hover-black">See more...</a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- SWOT Analyse blog post -->
            <div class="col-md-4">
                <div class="card bg-light mb-3">
                    <div class="card-header">SWOT Analysis</div>
                    <img class="card-img-top" src="/img/swot.jpg" alt="SWOT Analysis">
                    <div class="card-body">
                        <p class="card-text">
                            <a href="Swot-Analyse" class="text-link-hover-black">See more...</a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Programming exprerience blog post -->
            <div class="col-md-4">
                <div class="card bg-light mb-3">
                    <div class="card-header">Programming experience</div>
                    <img class="card-img-top" src="/img/progExp.jpg" alt="programming experience">
                    <div class="card-body">
                        <p class="card-text">
                            <a href="Programming-Experience" class="text-link-hover-black">See more...</a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- First feedback blog post -->
            <div class="col-md-4">
                <div class="card bg-light mb-3">
                    <div class="card-header">First feedback</div>
                    <img class="card-img-top" src="/img/feedback.png" alt="Feedback">
                    <div class="card-body">
                        <p class="card-text">
                            <a href="First-Feedback" class="text-link-hover-black">See more...</a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- ICT career blog post -->
            <div class="col-md-4">
                <div class="card bg-light mb-3">
                    <div class="card-header">ICT career</div>
                    <img class="card-img-top" src="/img/career.jpg" alt="Career">
                    <div class="card-body">
                        <p class="card-text">
                            <a href="ICT-Career" class="text-link-hover-black">See more...</a>
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>

</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>
