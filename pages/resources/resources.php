<!-- This is our resources page. It outlines all of the API's and other resources that we used to build our website. -->
<!DOCTYPE html>
<html lang="en">
<html class="no-js"> <!-- Require a specific javascript class which streamlines the process of writing javascript code for this page. -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script>document.documentElement.className = document.documentElement.className.replace('no-js','js');</script>
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
        <!-- Redirect users to the homepage when clicking our header -->
        <a class="navbar-brand js-scroll-trigger" href="../../index.html" style="box-shadow: none;">Coronavirus Information Center</a>
        <!-- Responsive navbar that collapses on different devices -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Hyperlinks in the navbar that redirect you to other parts of our website -->
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

        <!-- A simple header and an icon to inform the user what this webpage is about -->
        <div class="container-fluid bg-light p-5 text-center my-5">
            <img src="../../images/resources.svg" alt="Statistics" height="64" style="margin-bottom: 10px;">
            <h1>Resources</h1>
            <p class="lead">The source of our data and the tools we used</p>
        </div>

        <div style="text-align: center;">
            <!-- code that was used for the faq page hosted on 000webhost. References back to our php file to fill out the webpage. -->
            <?php
                include "retrieve.php";
            ?>
        </div>
        <!-- JS script to fade our page in as a transition. -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script>$('body').fadeIn(500); // fadein time in ms</script>
    </body>
</html>