<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Test Ajax</title>
  <style>
    table,th,td{
      border: 1px solid black;
    }
  </style>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+30JU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4" crossorigin="anonymous"></script>
</head>
<body>
  <h1>Post List</h1>
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Description</th>
      </tr>
    </thead>
  </table>
  <script>
    $.ajax({
      type: 'GET',
      url: 'https://localhost:8000/api/post/list',
      success: function(result) {
        result.forEach(post => {
          $("tbody").append('<tr><td>${post.id}</td><td${post.title}</td><td>${post.description}</td></tr>');
        });
        console.log(result);
        }
    });
  </script>
</body>
</html>