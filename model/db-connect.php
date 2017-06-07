<?php

$con = @mysqli_connect('localhost', 'root', '', 'stage-cms');

if (!$con) {
    echo "Error: " . mysqli_connect_error();
    exit();
}

$sql    = 'SELECT * FROM article';
$query  = mysqli_query($con, $sql);
while ($row = mysqli_fetch_array($query))
{
    echo $row['article'] . "<br>";
}

// Close connection
mysqli_close ($con);
