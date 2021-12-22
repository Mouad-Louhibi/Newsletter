<?php
session_start();
$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'userregistration');

if ($con->connect_error) {
    die("connection failed : " . $con->connect_error);
}

$userquery = "SELECT * FROM currentuser";
$userresult = $con->query($userquery);
$userow = $userresult->fetch_assoc();
