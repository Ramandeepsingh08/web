<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add Caption</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Fill Your Details</h2>
  <form action="insert.php" method=GET>
    <div class="form-group">
      <label for="caption">Caption Heading</label>
      <input type="text" class="form-control" id="caption" placeholder="Add caption" name="caption">
    </div>
    <div class="form-group">
      <label for="p">P caption</label>
      <input type="text" class="form-control" id="p" placeholder="Enter paragrah" name="p">
    </div>
    
    <input type="submit" class="btn btn-default" name="submit" value="Submit">
  </form>
  
</div>

<?php
  include("connection.php");
  
?>

</body>
</html>
