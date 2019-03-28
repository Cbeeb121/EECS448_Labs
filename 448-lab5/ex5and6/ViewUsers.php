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


$query = "SELECT user_id FROM Users;";
$result = $mysqli->query($query);


if ($result->num_rows > 0) {
  // output data to user
  echo "<table style='width:30%; font-size:20px;' align='center'>";
  echo "<tr>";
  echo "<th>Users</th>";
  echo "</tr>";
  while($row = $result->fetch_assoc()) {
    $user = $row["user_id"];
    echo "<tr>";
    echo "<td>" . $user . "</td>";
    echo "</tr>";
  }
  echo "</table>";
}
else {
  echo "No Users in database";
}

/* close connection */
$mysqli->close();
?>
