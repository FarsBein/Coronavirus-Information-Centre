<!-- https://cps530-labs.000webhostapp.com/ -->
<?php
$mysqli = new mysqli("localhost","id15297802_lab05q1","Wnej&2MYV~t]#(/}","id15297802_lab05");

if ($mysqli -> connect_errno){
    echo "Failed to connect to MySQL: " . $mysqli -> connection_errno;
    exit();
}
$sqlText = "SELECT subject, location, date_taken, url FROM photo";
$result = $mysqli->query($sqlText);

if ($result) {
    echo '<!DOCTYPE html>
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
        <link rel="stylesheet" href="style.css">
    
        <title>Covid Info</title>
    </head>
    <body>
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" id="mainNav">
        <div class="container" style="text-align: center;">
            <a class="navbar-brand js-scroll-trigger" href="" style="box-shadow: none; ">Coronavirus Information Center</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        </nav>
    
        <div class="container-fluid bg-light p-5 text-center my-5" style="width: 100%;">
            <h1>Feedback</h1>
            <p class="lead">Thank you for caring</p>
        </div>';
    print("<div style='text-align: center;'>");
    while($row = mysqli_fetch_row($result)){
        printf("<h3> %s in %s </h3>", $row[0], $row[1]);
        printf("<h5> Date: %s </h5>", $row[2]);
        printf("<img src='%s' alt='%s' width='300' style='margin-bottom: 20px;'> ", $row[3], $row[0]);
        print("<br/>");
    }
    print("<div/>");
    echo'</body>
    </html>';
    $result->close();
}

?>
