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

    <!-- Big title of study choice blog page-->
    <div class="page-title">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <h1 id="page-title-text">SWOT Analysis</h1>
                </div>
            </div>
        </div>
    </div>


    <div class="container">

        <button class="btn btn-light" id="blog_buttons" onclick="window.history.back()">Back </button>

        <div class="row g-4 justify-content-center">
            <div class="col-md-12">
                <div class="card bg-light mb-3">
                    <div class="card-header">SWOT Analysis</div>
                    <div class="card-body">
                        <p class="card-text">
                            Strenghts: <br>
                            -perseverance (If I want something, then I try my best to achieve it) <br>
                            -Focused (can work for long time on 1 task/assignment) <br>
                            -Team player (besides working independently I can also work well in groups) <br> <br>

                            Weaknesses: <br>
                            -Too focused (too focused on 1 task, sometimes causing me to overlook other (smaller) tasks) <br>
                            -Too flexible towards uncooperative group members <br> <br>

                            Opportunities: <br>
                            -Learning lots in the field of ICT <br> <br>

                            Threats: <br>
                            -demotivated by group members (If i'm grouped with unmotivated students I tend to be less motivated) <br>
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
