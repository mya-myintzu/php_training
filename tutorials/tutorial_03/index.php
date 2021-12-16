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
  <!--Calculate age-->
  <?php
    function getAge($dob){
      $bday = new DateTime($dob);
      $today = new DateTime(date('m.d.y'));
      if($bday>$today){
        return 'You are not born yet';
      }
      $diff = $today ->diff($bday);
      return 'Your current age is : '.$diff->y.' Years.';
    }


  ?>
<h1 class="center">Calculate Age from DOB</h1>
<hr>
<div class="form-wrapper">
  <form>
    <div class="input-wrapper">
      <label>Date of Birth</label>
      <input type="date" name="dob">
      <input type="submit" value="Calculate Age">
    </div>
  </form>
    <?php if(isset($_GET['dob']) && $_GET['dob']!=''){?>
      <div class="result-wrapper">
        <?php echo getAge($_GET['dob']);?>
      </div>
      <?php } ?>

</div>


</body>
</html>