<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = new mysqli("localhost","id15297802_lab05q1","Wnej&2MYV~t]#(/}","id15297802_lab05");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$score = mysqli_real_escape_string($link, $_REQUEST['score']);
$comment = mysqli_real_escape_string($link, $_REQUEST['comment']);
 
// Attempt insert query execution
$sql = "INSERT INTO feedback (score, comment) VALUES ('$score', '$comment')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>