<?php

echo "<html>";
  echo "<head>";
    echo "<meta charset='utf-8'>";
    echo '<link href= "style.css" rel="stylesheet" type="text/css" />';
  echo "</head>";
  echo "<body>";

$mysqli = new mysqli("mysql.eecs.ku.edu", "c803b216", "si3ik4eV", "c803b216");

/* check connection */
if ($mysqli->connect_error) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$username = $_POST["username"];
$post = $_POST["post"];

$query = "INSERT INTO Posts (content, author_id) VALUES (\"$post\", (SELECT user_id FROM Users WHERE user_id = '$username'));";
echo "<br>";

  if ($result = $mysqli->query($query)) {
    echo "New Post created successfully";
    /* free result set */
    $result->free();
  }
  else
  {
    echo "Could not enter into database properly";
    echo "<p>Error: ";
    echo $mysqli;
    echo $mysqli->error;
  }

/* close connection */
$mysqli->close();
?>
