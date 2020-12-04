<!-- code that was used for the feedback page hosted on 000webhost -->

<?php
$link = new mysqli("localhost","id15585758_covid","C[Z\mnNEy3+F)cV&","id15585758_data");
 
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

<meta http-equiv="refresh" content="3;url=https://www.cs.ryerson.ca/~fbein/project/pages/feedback/feedbackDone.html">