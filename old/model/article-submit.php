<?php
include ('db-connect.php');

$submitTitle = $_POST['submit-title'];
$submitContent = $_POST['submit-content'];


$sql = "INSERT INTO article(title,content) VALUES ('$submitTitle','$submitContent')";

$query  = mysqli_query($con, $sql);

