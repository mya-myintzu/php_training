<!DOCTYPE html>
<html>
<body>

<?php

$resource = opendir("files");
 while (($entry = readdir($resource)) !== FALSE){
   echo $entry."<br/>";
 }

?>

</body>
</html>