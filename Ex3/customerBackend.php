<!DOCTYPE html>
<?php

  echo "<html>";
    echo "<head>";
      echo "<meta charset='utf-8'>";
      echo "<title>Online Store</title>";
      echo '<link href= "style.css" rel="stylesheet" type="text/css" />';
      echo '<script type="text/javascript" src="formChecker.js"> </script>';
    echo "</head>";
    echo "<body>";

      $shipping = $_POST["shipping"];
      if ($shipping == "Free") {
        $shipTag = "[7 day] FREE";
        $cost = 0.00;
      } else if ($shipping == "Overnight") {
        $shipTag = "[Overnight] $50.00";
        $cost = 50.00;
      } else {
        $shipTag = "[3 day] $5.00";
        $cost = 5.00;
      }

      $razr = $_POST["razr"];
      $berry = $_POST["berry"];
      $intensity = $_POST["intensity"];

      $tCost = ($razr * 200) + ($berry * 310) + ($intensity * 120);
      $e = $_POST["email"];
      $p = $_POST["password"];

      echo "Thank you for buying from Radio Shack!";
      echo "<br>Email: " . $e;
      echo "<br>Password: " . $p;
      echo "<br>";
      echo "<table><tr><td></td>";
      echo "<td>Quantity</td>";
      echo "<td>Item Cost</td>";
      echo "<td>Total</td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td>Motorola Razr</td>";
      echo "<td>"; echo $razr; echo "</td>";
      echo "<td>$200.00</td>";
      echo "<td>$"; echo $razr * 200; echo ".00</td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td>BlackBerry Z10</td>";
      echo "<td>"; echo $berry; echo "</td>";
      echo "<td>$310.00</td>";
      echo "<td>$"; echo $berry * 310; echo ".00</td>";
      echo "</tr><tr>";
      echo "<td>Samsung Intensity</td>";
      echo "<td>"; echo $intensity; echo "</td>";
      echo "<td>$120.00</td>";
      echo "<td>$"; echo $intensity * 120; echo ".00</td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td>Shipping</td>";
      echo "<td colspan=\"2\">"; echo $shipTag; echo "</td>";
      echo "<td>$"; echo $cost; echo ".00</td>";
      echo "</tr>";
      echo "<tr>";
      echo "<td colspan=\"3\"><b>Total Cost</b></td>";
      echo "<td>$"; echo $tCost; echo ".00</td>";
      echo "</tr>";
      echo "</table>";
    echo "</body>";
  echo "</html>";
?>
