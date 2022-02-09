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

    <!-- Big title of First feedback blog page-->
    <div class="page-title">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <h1 id="page-title-text">First feedback</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container">

        <button class="btn btn-light" id="blog_buttons" onclick="window.history.back()">Back </button>

        <div class="row g-4 justify-content-center">
            <div class="col-md-12">
                <div class="card bg-light mb-3">
                    <div class="card-header">Daphne's feedback</div>
                    <div class="card-body">
                        <p class="card-text">
                            From reading this, you know very well what attracts you to ICT.
                            Is game development also something that attracts you extra to do or was that more hobby and see if you could pull it off?
                            I see that you did a year of HBO information at Avans. Was that through the AD or a full-time HBO course?
                            and what makes you make a switch to us?
                        </p>

                        <p class="card-text">
                            You indicate that you can be too lenient towards group members who are less motivated for their studies.
                            I then read, you let the situation take its course and are less likely to take action to stand up for yourself, is that right?
                        </p>

                        <p class="card-text">
                            You never know what kind of group you will end up in but what are actions that can be done in the team so that all noses and expectations match?
                            What could you do yourself to ensure that it doesn't affect your study results and motivation?
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4 justify-content-center">
            <div class="col-md-12">
                <div class="card bg-light mb-3">
                    <div class="card-header">My opinion</div>
                    <div class="card-body">
                        <p class="card-text">
                            After I read the feedback, I found that some points came across differently than I had initially intended.
                            This is because I mentioned some points but did not elaborate on them, which led to miss-communication.
                            In spite of this, there were some remarks that I could use.
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
