<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "c803b216", "si3ik4eV", "c803b216");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$query = "INSERT INTO Users (user_id) VALUES ('')";

if ($result = $mysqli->query($query)) {
    /* free result set */
    $result->free();
}

/* close connection */
$mysqli->close();
?>
