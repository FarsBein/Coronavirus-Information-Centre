<!-- code that was used for the faq page hosted on 000webhost -->
<?php
$link = new mysqli("localhost","id15585758_covid","C[Z\mnNEy3+F)cV&","id15585758_data");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "SELECT subject, name, url FROM resources";
$result = $link->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<p>";
        echo $row["subject"] . " <a href='". $row["url"] . "' style='font-weight: bold;'>" . $row["name"] . "</a>";
        echo "</p><br>";
    }
} 

$link->close();
?>