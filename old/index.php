<?php
require ('model/config.php');
require ('model/db-connect.php');
include('views/header.html');
include ('views/navbar.html');

$page = (empty($_GET['page']))?'' : $_GET['page'];

switch($page) {
    case 'submit-page';
        include 'views/submit.php';
        break;

    default:
        include 'views/home.php';
};

