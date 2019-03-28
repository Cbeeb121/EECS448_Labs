<?php
$mysqli = new mysqli("mysql.eecs.ku.edu", "c803b216", "si3ik4eV", "c803b216");

/* check connection */
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$username = $_POST["username"];

$query = "INSERT INTO Users (user_id) VALUES ('$username')";

  if ($result = $mysqli->query($query)) {
    echo "<p>New Record created successfully</p>";
    /* free result set */
    $result->free();
  }
  else{
    echo "<p>Error: " . $mysqli . "<br>" . $mysqli->error;
  }

/* close connection */
$mysqli->close();
?>
