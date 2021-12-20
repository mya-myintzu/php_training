<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>How to Create a QRCode using Php</title>
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>

<body>
  <div class="container">
    <h1 class="page-header text-center">QRCode using Php</h1>
    <div class="row">
      <div class="col-sm-3 col-sm-offset-3">
        <form method="POST">
          <div class="form-group">
            <label for=""> Convert to QRCode</label>
            <input type="text" class="form-control" name="text_code"><br><br>
          </div>
          <button type="submit" class="btn btn-primary" name="generate">Generate QRCode</button>
        </form>
      </div>
      <div class="col-sm-3">
        <?php
        if (isset($_POST['generate'])) {
          $code = $_POST['text_code'];
          echo "
						<img src='https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=$code&choe=UTF-8'>
					";
        }
        ?>
      </div>
    </div>
  </div>
</body>

</html>