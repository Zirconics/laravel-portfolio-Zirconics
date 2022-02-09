<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Kevin - Portfolio</title>

    <link rel="stylesheet" href="css/style.css">
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

<!-- Personal information -->
<main>

    <div class="container profile">
        <div class="row g-5 d-flex justify-content-center align-items-center">
            <div class="col-md-5">
                <img src="img/pf_picture.png" alt="Me" class="profile-picture">
            </div>
            <div class="col-md-5">
                <h1 class="profile-title">Hello <span id="easter-egg">World!</span></h1>
                <p class="profile-text">
                    I'm Kevin. Learn more about me below.
                </p>
            </div>
        </div>
    </div>

    <!-- About me paragraph -->
    <div class="container profile-row">
        <div class="row g-5 d-flex justify-content-center align-items-center">
            <div class="col-md-5">
                <h1 class="profile-title">About me</h1>
                <p class="profile-text-smaller">
                    Once again, Hello. I'm Kevin a 20 year old student. Currently I am following a <abbr title="Computer Science">CS</abbr> course at HZ
                    University of Applied Sciences located in Middelburg, Zeeland. <br>
                    I started programming because as a kid I always loved working with computers.
                    Whether it was playing games or building my own computer. I absolutely loved it.
                    When I got older I started to get more interessted in how a computer worked.
                    The things like "how do components interact with eachother" or "How does a program look/work "Behind the scenes"".
                </p>
            </div>

            <div class="col-md-5" id="profile-button-list">
                <button type="button" class="btn btn-outline-light">Hard-working</button>
                <button type="button" class="btn btn-outline-light">Independent</button>
                <button type="button" class="btn btn-outline-light">Humble</button>
                <button type="button" class="btn btn-outline-light">Reserved</button>
                <button type="button" class="btn btn-outline-light">Serious</button>
                <button type="button" class="btn btn-outline-light">Driven</button>
            </div>
        </div>
    </div>

    <!-- My hobbies paragraph -->
    <div class="container profile-row">
        <div class="row g-5 d-flex justify-content-center align-items-center">
            <div class="col-md-5" id="profile-button-list">
                <button type="button" class="btn btn-outline-light">Programming</button>
                <button type="button" class="btn btn-outline-light">Reading</button>
                <button type="button" class="btn btn-outline-light">Fitness</button>
                <button type="button" class="btn btn-outline-light">Gaming</button>
                <button type="button" class="btn btn-outline-light">Netflix</button>
            </div>
            <div class="col-md-5">
                <h1 class="profile-title">My hobbies</h1>
                <p class="profile-text-smaller">
                    Besides programming, I have a few other hobbies.
                    These include reading books, watching Netflix series, gaming and fitness.
                    When it comes to reading and Netflix, I like almost anything if it has to do with Fantasy.
                    As for gaming I quite enjoy story-rich or party games.
                    Besides all these activities where there is minimal movement, I also really enjoy working out.
                    When I have the time and chance, I try to squeze in 3 to 5 sessions a week.
                </p>
            </div>
        </div>
    </div>

    <!-- Experiences paragraph -->
    <div class="container profile-row">
        <div class="row g-5 d-flex justify-content-center align-items-center">
            <div class="col-md-5">
                <h1 class="profile-title">Experiences</h1>
                <p class="profile-text-smaller">
                    graduated from high school with ICT in my curriculum. After this I started a HBO-ICT education at avans, in breda,
                    of which I only followed the first year before coming here to HZ. The things I learned at avans are: making a website, making (android) applications, making an API.
                    besides programming we also learned about database, professional skills and more.
                    Some of the projects I did during that time can be found on <a href="https://github.com/Zirconics" class="text-link-hover">my Github page</a> , but the project I am the most proud of is <a href="https://www.1t3.nl/" class="text-link-hover">1T3</a>.
                    1T3 is a project that a group of students and I created for a client, which is now online and being used.
                </p>
            </div>
            <div class="col-md-5" id="profile-button-list">
                <button type="button" class="btn btn-outline-light">HTML</button>
                <button type="button" class="btn btn-outline-light">CSS</button>
                <button type="button" class="btn btn-outline-light">Bootstrap</button>
                <button type="button" class="btn btn-outline-light">Vue</button>
                <button type="button" class="btn btn-outline-light">Java</button>
                <button type="button" class="btn btn-outline-light">JavaScript</button>
                <button type="button" class="btn btn-outline-light">TypeScript</button>
                <button type="button" class="btn btn-outline-light">MySQL</button>
                <button type="button" class="btn btn-outline-light">Scrum</button>
            </div>
        </div>
    </div>
</main>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>
