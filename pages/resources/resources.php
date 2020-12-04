<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    
    <!-- Bootstrap js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <!-- Font Awesome Icon Kit -->
    <script src="https://kit.fontawesome.com/06e4885c0f.js" crossorigin="anonymous"></script>

    <!-- My Style css file -->
    <link rel="stylesheet" href="resources.css">

    <title>Resources</title>
</head>
<body>
    
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="../../index.html" style="box-shadow: none;">Coronavirus Information Center</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li>
                    <a class="nav-link js-scroll-trigger" href="../../pages/testing/testing.html">Testing</a>
                </li>
                <li>
                    <a class="nav-link js-scroll-trigger" href="../../pages/symptoms/symptoms.html">Symptoms</a>
                </li>
                <li>
                    <a class="nav-link js-scroll-trigger" href="../../pages/prevention/prevention.html">Prevention</a>
                </li>
                <li>
                    <a class="nav-link js-scroll-trigger" href="">Resources</a>
                </li>
                <li>
                    <a class="nav-link js-scroll-trigger" href="../../pages/timeline/timeline.html">Timeline</a>
                </li>
                <li>
                    <a class="nav-link js-scroll-trigger" href="../../pages/news/news.html">News</a>
                </li>
                <li>
                    <a class="nav-link js-scroll-trigger" href="../../pages/faq/faq.html">FAQ</a>
                </li>
                <li>
                    <a class="nav-link js-scroll-trigger" href="../../pages/about/about.html">About</a>
                </li>
                <li>
                    <a class="nav-link js-scroll-trigger" href="../../pages/feedback/feedback.html">Feedback</a>
                </li>
            </ul>
            </div>
        </div>
        </nav>
    
        <div class="container-fluid bg-light p-5 text-center my-5">
            <img src="../../images/resources.svg" alt="Statistics" height="64" style="margin-bottom: 10px;">
            <h1>Resources</h1>
            <p class="lead">The source of our data and the tools we used</p>
        </div>

        <div style="text-align: center;">
            <!-- code that was used for the faq page hosted on 000webhost -->
            <?php
                include "retrieve.php";
            ?>
        </div>
    </body>
</html>