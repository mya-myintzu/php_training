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
  <form action="welcome.php" method="post">
    <table align="center">
      <tr>
        <th colspan="2">
          <h2 align="center">Login</h2>
        </th>
      </tr>
      <tr>
        <td>Username:</td>
        <td><input type="text" name="uname"></td>
      </tr>
      <tr>
        <td>Password:</td>
        <td><input type="password" name="pwd"></td>
      </tr>
      <tr>
        <td align="right" colspan="2">
          <input type="submit" name="login" value="login">
        </td>
      </tr>
    </table>
  </form>
</body>

</html>