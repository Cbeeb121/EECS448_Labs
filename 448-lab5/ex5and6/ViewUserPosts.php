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

$name = $_POST["username"];
$query = "SELECT post_id, author_id, content FROM Posts WHERE author_id = '$name';";
$result = $mysqli->query($query);

echo "<h1>" . $name . "'s Posts</h1>";

echo "<table align='center' style= 'width:70%'>";
echo "<tr>";
echo "<th style= 'width:20%'>Post ID</th>";
// echo "<th>Author ID</th>";
echo "<th>Post Content</th>";
echo "</tr>";

while ($row = $result->fetch_assoc()) {
  $p_id = $row['post_id'];
  // $un = $row['author_id'];
  $content = $row['content'];
  echo "<tr>";
  echo "<td style= 'width:20%'>". $p_id . "</td>";
  // echo "<td>". $un . "</td>";
  echo "<td>". $content . "</td>";
  echo "</tr>";
}
echo "</table>";
echo "</body>";
echo "</html>";

/* close connection */
$mysqli->close();
?>
