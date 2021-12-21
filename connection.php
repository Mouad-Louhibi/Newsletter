<?php
session_start();
$con = mysqli_connect('localhost', 'root', '');
mysqli_select_db($con, 'userregistration');

$query = "SELECT * FROM news";

if ($con->connect_error) {
    die("connection failed : " . $con->connect_error);
} else {
    $result = $con->query($query);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"] . " - title: " . $row["title"] . " " . " - resume: "
                . $row["resume"] . " - contenu: " . $row["contenu"] . "<br>";
        }
    } else {
        echo "0 results";
    }
}
