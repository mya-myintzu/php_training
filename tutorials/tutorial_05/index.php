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
  <div class="text">
    <h2>Text</h2>
    <?php
    if ($file = fopen("sample.txt", "r")) {
      while (!feof($file)) {
        $line = fgets($file);
        echo ("$line" . "<br>");
      }
      fclose($file);
    }
    ?>
  </div>
  <div class="text">
    <h2>Document Type</h2>
    <?php
    if ($file = fopen("sample.doc", "r")) {
      while (!feof($file)) {
        $line = fgets($file);
        echo ("$line" . "<br>");
      }
      fclose($file);
    }
    ?>
  </div>
  <div class="text">
    <h2>CSV</h2>
    <?php
    //How to create CSV file from array in php
    $row = 1;
    if (($file = fopen('sample.csv', 'r')) !== FALSE) {
      while (($data = fgetcsv($file, 1000, ",")) !== FALSE) {
        $num = count($data);
        echo "<p>fields in line $row: <br /></p>\n";
        $row++;
        for ($c = 0; $c < $num; $c++) {
          echo $data[$c] . "<br />\n";
        }
      }
      fclose($file);
    }
    ?>
  </div>
  <div class="text">
    <h2>Excel</h2>
    <?php
    require_once 'SimpleXLSX.php';
    if ($xlsx = SimpleXLSX::parse('sample.xlsx')) {
      echo "<table><tbody>";
      $i = 0;
      foreach ($xlsx->rows() as $row) {
        if ($i == 0) {
          echo "<tr><th>" . $row[0] . "</th></tr>";
        } else {
          echo "<tr><td>" . $row[0] . "</td></tr>";
        }
        $i++;
      }
      echo "</tbody></table>";
    } else {
      echo SimpleXLSX::parseError();
    }
    ?>
  </div>
</body>

</html>