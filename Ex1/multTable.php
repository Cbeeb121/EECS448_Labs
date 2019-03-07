  <?php
  //Inside mult.php
  error_reporting(E_ALL);
  ini_set("display_errors", 1);
  echo "<table>";
  for ($i=1; $i <= 100 ; $i++) {
    echo "<tr>";
    for ($j=1; $j <= 100 ; $j++) {
        echo "<td>". $i * $j . "</td>";
    }
    "</tr>";
  }
  "</table>";
  ?>




?>
