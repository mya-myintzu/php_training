<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Document</title>
</head>

<body>
  <!--Create chess
  import css files from css folder-->
  <table>
    <?php
    for ($row = 1; $row <= 8; $row++) {
      echo "<tr>";
      for ($col = 1; $col <= 8; $col++) {
        if ($col % 2 == 0) {
          $color = '#fff';
        } else {
          $color = '#000';
        }
        if ($row % 2 == 0) {
          if ($col % 2 == 0) {
            $color = '#000';
          } else {
            $color = '#fff';
          }
        }
        echo "<td style='background-color:" . $color . "' > </td>";

        echo "</td>";
      }
      echo "</tr>";
    }
    ?>
  </table>
</body>

</html>