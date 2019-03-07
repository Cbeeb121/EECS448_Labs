  <?php
  //Inside mult.php
  error_reporting(E_ALL);
  ini_set("display_errors", 1);

  echo "<table>";
  for ($i=0; $i <= 100; $i++) {
    echo "<tr>";
    for ($j=1; $j <= 100 ; $j++) {
      if ($i == 0 && $j != 0)
      {
        echo "<td>0</td>";
      }
      else if ($i != 0 && $j == 0)
      {
        echo "<td>0</td>";
      }
      else if ($i != 0 && $j != 0)
      {
        echo "<td>" $i * $j "</td>";
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
