<?php
session_start();
$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'userregistration');

$query = "SELECT * FROM news";
$result = mysqli_query($con, $query);
$rows = mysqli_fetch_row($result);

var_dump($rows);
// echo $result;
?>