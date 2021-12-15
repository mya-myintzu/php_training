<!--Create diamond shape with stars-->
<?php
$num = 6;
for ($row = 0; $row < $num; $row++) {
  for ($col = $row; $col < $num; $col++) {
    echo "&nbsp &nbsp";
  }
  for ($col = 0; $col < $row - 1; $col++) {
    echo "*  ";
  }
  for ($col = 0; $col < $row; $col++) {
    echo "*  ";
  }
  echo "<br>";
}

for ($row = 0; $row < $num; $row++) {
  for ($col = 0; $col < $row; $col++) {
    echo "&nbsp &nbsp";
  }
  for ($col = $row; $col < $num; $col++) {
    echo "* ";
  }
  for ($col = $row; $col < $num - 1; $col++) {
    echo "* ";
  }
  echo "<br>";
}
