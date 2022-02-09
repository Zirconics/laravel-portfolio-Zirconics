<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/style.css" />

    <title>Kevin - Portfolio</title>
</head>

<body>
<!-- navbar -->
<nav class="navbar navbar-expand-md sticky-top navbar-dark bg-dark">
    <div class="container-xxl">
        <!-- Page title / brand -->
        <a href="/" class="navbar-brand">
            <img src="img/logoHZ.png" alt="logo hz" />
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
                    <a class="nav-link" href="dashboard">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="profile">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="faq">FaQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="blogs/overview">Blog</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- All the content displayed on the site-->
<main>

    <!-- Welcome message -->
    <div class="container">
        <div class="row justify-content-center align-items-start">
            <div class="col-lg-10 col-md-10 col-sm-10 intro">
                <h1 class="intro-h1">An aspiring software engineer that likes to make things look pretty</h1>
                <p class="intro-subtext">Studying HBO-ICT at <a href="https://www.hz.nl" class="text-link-hover"> HZ
                        University of Applied Sciences. </a></p>
            </div>
        </div>
    </div>

    <!-- Animated scroll down button-->
    <a href="#frontpage-paragraph" class="ca3-scroll-down-link ca3-scroll-down-arrow" data-ca3_iconfont="ETmodules"
       data-ca3_icon=""></a>

    <!-- First paragraph + picture -->
    <section class="frontpage-paragraph" id="frontpage-paragraph">
        <div class="container-lg">
            <div class="
              row
              g-5
              justify-content-center
              align-items-center
              front-page-paragraph
            ">
                <div class="col-md-5 text-center text-md-start">
                    <h1>
                        <div class="h1-white-bold">「About my study」</div>
                    </h1>
                    <p class="lead my-4 text-white">
                        HBO-ICT is a course that thinks about programming and system administration.
                        But it is so much more than that.
                        Brainstorm about a good software solution for a client, come up with a cloud solution,
                        build a new application, collect and interpret data to advise a company, or get involved with cyber
                        security.
                        The possibilities are endless. In addition to developing your own skills, you work a lot in
                        multidisciplinary teams.
                    </p>
                </div>
                <div class="col-md-5 text-center d-none d-md-block">
                    <img src="img/webdev.jpg" class="img-fluid bordered-img-reversed" alt="picture" />
                </div>
            </div>
        </div>
    </section>

    <!-- Second paragraph + picture -->
    <section class="frontpage-paragraph">
        <div class="container-lg">
            <div class="row g-5 justify-content-center align-items-center front-page-paragraph">
                <div class="col-md-5 text-center d-none d-md-block">
                    <img src="img/dev-team.jpg" class="img-fluid bordered-img" alt="picture" />
                </div>
                <div class="col-md-5 text-center text-md-start">
                    <h1>
                        <div class="h1-white-bold">「Past experiences」</div>
                    </h1>
                    <p class="lead my-4 text-white">
                        Over the past few years I have done some programming.
                        I have done this by playing around with different languages.
                        I also gained a lot of experience when I studied for a year at Avans Hogeschool in Breda.
                        The languages I have experience with are listed below.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- List of clickable buttons -->
    <section class="ListOfItems">
        <div class="container">
            <div class="row gx-3 justify-content-md-center">
                <div class="col col-md-auto" id="prog-language-list">
                    <a href="https://devdocs.io/html/" target="_blank"><button type="button"
                                                                               class="btn btn-outline-light">HTML</button></a>
                    <a href="https://developer.mozilla.org/en-US/docs/Web/CSS/Reference" target="_blank"><button type="button"
                                                                                                                 class="btn btn-outline-light">CSS</button></a>
                    <a href="https://docs.oracle.com/javase/7/docs/api/" target="_blank"><button type="button"
                                                                                                 class="btn btn-outline-light">Java</button></a>
                    <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript" target="_blank"><button type="button"
                                                                                                              class="btn btn-outline-light">Javascript</button></a>
                    <a href="https://v3.vuejs.org/guide/introduction.html" target="_blank"><button type="button"
                                                                                                   class="btn btn-outline-light">Vue</button></a>
                </div>
            </div>
        </div>
    </section>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>
