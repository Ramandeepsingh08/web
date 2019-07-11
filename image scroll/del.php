<html>
<head></head>
<body>
<?php
include('connection.php');

  
	$caption = $_REQUEST['caption'] ; 
	
$sql= " delete from  planet where caption = '$caption'"; 
$result = $conn->query($sql); 



?>
<hr>
<a href="show.php">Click Here </a>

</body>
</html>
