<!-- https://cps530-labs.000webhostapp.com/ -->
<?php
    $mysqli = new mysqli("localhost","id15297802_newproject","sW4N6nBMR}V?N5*v","id15297802_project");

    if ($mysqli -> connect_errno){
        echo "Failed to connect to MySQL: " . $mysqli -> connect_errno;
        exit();
    }
    echo "passed";
    $sqlText = "SELECT subject, link FROM resources";
    $result = $mysqli->query($sqlText);

    if ($result) {
        while($row = mysqli_fetch_row($result)){
            print("<p>");
            printf("%s <a href='%s'> %s </a>", $row[0], $row[2], $row[1]);
            print("</p>");
        }
        $result->close();
    }

?>
