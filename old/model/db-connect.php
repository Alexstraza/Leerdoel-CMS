<?php

if(!isset($con)) {
    $con = @mysqli_connect('127.0.0.1', 'root', 'root', 'stage-cms');

    if (!$con) {
        echo "Error: " . mysqli_connect_error();
        exit();
    }
}

//$sql    = 'SELECT * FROM article';
//$query  = mysqli_query($con, $sql);
//
//// Close connection
//mysqli_close ($con);
