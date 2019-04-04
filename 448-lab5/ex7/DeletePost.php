<!DOCTYPE html>
<html>
  <head>
    <title>Deleted posts</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
  <?php
    $mysqli = new mysqli("mysql.eecs.ku.edu", "c803b216", "si3ik4eV", "c803b216");
    if ($mysqli->connect_error) {
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
    }
    $query = "SELECT * FROM Posts;";
    $result = $mysqli->query($query);

    if ($stmt = mysqli_prepare($mysqli, $query)) {
      mysqli_stmt_execute($stmt);
      mysqli_stmt_store_result($stmt);
      $number = mysqli_stmt_num_rows($stmt);
      for ($i=0; $i < $number; $i++){
        $deleteBox = $_POST['checkbox'][$i];
        $sql = "DELETE FROM Posts WHERE post_id = '$deleteBox'";
        $result = $mysqli->query($sql);
      }
      mysqli_stmt_close($stmt);
    }

    $num_of_boxes = count($_POST["checkbox"]);
    echo "<h1>You deleted ". $num_of_boxes . " post(s)</h1>";
    echo "<table align='center' style='width:70%'>";
    echo "<tr>";
    echo "<th>Author ID</th>";
    echo "<th>Post</th>";
    echo "</tr>";

    $query2 = "SELECT * FROM Posts ORDER BY author_id;";
    $result2 = $mysqli->query($query2);

    while ($row = $result2->fetch_assoc()) {
      $un = $row['author_id'];
      $content = $row['content'];
      echo "<tr>";
      echo "<td style='text-align:left;'>$un</td>";
      echo "<td style='text-align:left;'>$content</td>";
      echo "</tr>";
    }
    echo "</table>";
  $mysqli->close();
  ?>
  </body>
</html>
