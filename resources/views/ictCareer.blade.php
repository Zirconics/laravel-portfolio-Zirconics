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

    <!-- Big title of ICT career blog page-->
    <div class="page-title">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <h1 id="page-title-text">ICT career</h1>
                </div>
            </div>
        </div>
    </div>


    <div class="container">

        <button class="btn btn-light" id="blog_buttons" onclick="window.history.back()">Back </button>

        <div class="row g-4 justify-content-center">
            <div class="col-md-12">
                <div class="card bg-light mb-3">
                    <div class="card-header">Hacker One</div>
                    <div class="card-body">
                        <p class="card-text">
                            HackerOne focusses a lot on cyber security,
                            HackerOne is a vulnerability coordination and bug bounty platform that connects businesses with penetration testers and cybersecurity researchers.
                            They do this to ensure that systems do not contain leaks. they have done this for Nintendo, PayPal,
                            Starbucks and even the Department of Defense in America, among others.The roles in the company are very divided.
                            For example, there are several groups that generally consist of eight people.
                            The various roles within the company involve:
                        <li>Engineer</li>
                        <li>Technical Director</li>
                        <li>Security Engineer</li>
                        <li>Security Consultant</li>
                        <li>Security Software Developer</li>
                        <li>Software Developer</li>
                        </p>

                        <p class="card-text">
                            During HackerOne's presentation, we were told what IT tools they used and what they were being used for.
                            On the client-side they use:
                        <li>React</li>
                        <li>Tailwind</li>
                        <li>Apollo</li>
                        </p>

                        <p class="card-text">
                            On the server-side they use:
                        <li>GraphQI</li>
                        <li>Ruby on Rails</li>
                        </p>

                        <p class="card-text">
                            To test their software they use:
                        <li>Rspec</li>
                        <li>Cucumber</li>
                        </p>

                        <p class="card-text">
                            And for their infrastructure they use:
                        <li>Postgres</li>
                        <li>Redis / Sidekiq</li>
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
