<?php
  $mysqli = new mysqli("mysql.eecs.ku.edu", "c803b216", "si3ik4eV", "c803b216");
  if ($mysqli->connect_error) {
      printf("Connect failed: %s\n", $mysqli->connect_error);
      exit();
  }

  $query = "SELECT * FROM Posts ORDER by author_id;";
  $result = $mysqli->query($query);


$mysqli->close();
?>
