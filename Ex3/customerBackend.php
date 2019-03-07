<!DOCTYPE html>
<?php

  <html>
    <head>
      <meta charset="utf-8">
      <title>Online Store</title>
      <link href="style.css" rel="stylesheet" type="text/css" />
      <script type="text/javascript" src="formChecker.js"> </script>
    </head>
    <body>

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
      echo "<table>"
      echo "<tr>";
      echo "<td></td>";
      echo "<td>Quantity</td>";
      echo "<td>Cost Per Item</td>";
      echo "<td>Sub Total</td>";
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
      echo "</tr>";
      echo "<tr>";
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
    </body>
  </html>
?>
