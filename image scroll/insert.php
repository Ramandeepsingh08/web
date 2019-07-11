<html>
<head></head>
<body>
<?php
  include("connection.php");
   
  if($_GET['submit'])
  {
  $caption = $_GET['caption'];
  $p = $_GET['p'];
    if($caption!=" " && $p!=" ")
    {
        $sql = "insert into planet value('$caption', '$p')";
        $data = mysqli_query($conn, $sql);
        
        if($data)
        {
          echo"Data inserted into Database";
	  ?>
	  <a href="show.php">Click Here </a>
        <?php
	}
	
    
	else{
          echo"All fields are required";
	  ?>
	  <a href="form.php">Go Back  </a>
<?php
        }
    }
   } 
?>


<hr>


</body>
</html>
