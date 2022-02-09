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
                    <h1 id="page-title-text">Study Choice</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="container">

        <button class="btn btn-light" id="blog_buttons" onclick="window.history.back()">Back </button>

        <!-- Before the study card -->
        <div class="row g-4 justify-content-center">
            <div class="col-md-12">
                <div class="card bg-light mb-3">
                    <div class="card-header">Before the study</div>
                    <div class="card-body">
                        <p class="card-text">
                            Before I started my study at HZ I visited several schools including HZ(HBO-ICT) and Avans(Informatica / Technical Informatics).
                            Besides visiting I also made several online study choice tests and tried to do some programming myself.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Why I chose this study card -->
        <div class="row g-4 justify-content-center">
            <div class="col-md-12">
                <div class="card bg-light mb-3">
                    <div class="card-header">Why I chose this study</div>
                    <div class="card-body">
                        <p class="card-text">
                            I chose HBO-ICT because I have always been interested in how computers and the programs on them work.
                            I like to find out how the different components work together and to play around with this.
                            Then I like to see what can be made with it all. I have also tried to make small games with the help of Youtube tutorials.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- After the study card -->
        <div class="row g-4 justify-content-center">
            <div class="col-md-12">
                <div class="card bg-light mb-3">
                    <div class="card-header">After completing the study</div>
                    <div class="card-body">
                        <p class="card-text">
                            What I want to do after college is not entirely clear to me yet.
                            I am interested in software delopment, game development and Business IT Consultant.
                            In the next four years I hope to have learned enough so that I can pursue one of the previously mentioned professions.
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
