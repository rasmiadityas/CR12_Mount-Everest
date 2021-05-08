<?php

$hostname = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "cr12_mounteverest_rasmisilasari";

// create connection
$connect = mysqli_connect($hostname, $username, $password, $dbname);

// Change character set to utf8
mysqli_set_charset($connect, "utf8");

// check connection
if ($connect->connect_error) {
    die("Connection failed: " . $connect->connect_error);
    /*}else {
    echo "Successfully Connected";*/
}

// picture placeholder
$defpic = 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/65/No-Image-Placeholder.svg/495px-No-Image-Placeholder.svg.png';

// base url
$baseurl = "$_SERVER[DOCUMENT_ROOT]/ajaxexercise/ajax-CR12_try/";
