<table style='margin:auto;border:1px solid'>
  <?php
    for($row=1; $row<=8; $row++){
      echo "<tr>";
        for($col=1; $col<=8; $col++){
          if($col % 2==0){
            $color='#fff';
          }else{
            $color = '#000';
          }
          if($row % 2 ==0){
            if($col % 2==0){
              $color='#000';
            }else{
              $color = '#fff';
            }
          }
          echo "<td style='height:90px;width:90px;background-color:".$color."' > </td>";

          echo "</td>";
        }
      echo "</tr>";
    }
  ?>
</table>