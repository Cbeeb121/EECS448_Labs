  <?php
  error_reporting(E_ALL);
  ini_set("display_errors", 1);

  echo "<h1>Multiplication Table</h1><br><br>";
  echo "<table>";
  for ($i=1; $i <= 100; $i++) {
    echo "<tr>";
    for ($j=1; $j <= 100 ; $j++) {
      if ($i == 0 && $j != 0)
      {
        echo "<td bgcolor=\"#7DE3C0\">0</td>";
      }
      else if ($i != 0 && $j == 0)
      {
        echo "<td bgcolor=\"#7DE3C0\">0</td>";
      }
      else if ($i != 0 && $j != 0)
      {
        echo "<td bgcolor=\"#7DE3C0\">" . ($i * $j) . "</td>";
      }
      else
      {
        echo "<td></td>";
      }
    }
    echo "</tr>";
    }
  echo "</table>";
?>
