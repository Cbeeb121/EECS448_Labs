<!DOCTYPE html>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Online Store</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="formChecker.js"> </script>
  </head>
  <body>
    <?php

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

    $cost = ($razr * 200) + ($berry * 310) + ($intensity * 120);
    $e = $_POST["email"];
    $p = $_POST["password"];



    ?>

  </body>
</html>
