<!DOCTYPE html>
<html lang="en">
<head>
  <title>web server</title>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<?php
	include('connection.php');
$sql= " select * from planet " ; 
$result = $conn->query($sql); 
?>

<body>

<div class="container">
  <h1 class="text-center">Welcome to Sweet World</h1>
  Date:
  <?php
	echo Date('D M Y' ) ;
  ?>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      
      <div class="item active">
        <img src="Ocean.jpg" alt="ocean" style="width:100%;height:600px;">
        <div class="carousel-caption">
          <h3>Great view of nature</h3>
        </div>
      </div>

       <?php
 
	  $dir = "images";
	  // Sort in ascending order - this is default
	  $a = scandir($dir);
	  //print_r($a);
	  foreach ($a as $value) {
	    if 	(($value <> ".") && ($value <> "..")  ) {
	      //echo "$value <br>";
	      //echo "<img src=/$value>";
	?>      
	      
      <div class="item">
        <img src="images/<?php echo "$value"; ?>" alt="New York" style="width:100%;height:6 00px;">
        <div class="carousel-caption">
    <?php
	$row = $result->fetch_assoc() ;
	?>
          <h3><?php echo $row["caption"] ; ?> </h3>
		  
          <p><?php echo $row["p"] ; ?></p>
		  
        </div>
      </div>
	      
	  <?php 
	    } // if ends   
	  }// foreach ends 
	  ?>

    
      
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Next</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Previous</span>
    </a>
  </div>
</div>
<hr>
<div class="container">
	<div class="row">
	<div class="alert alert-danger alert-dismissible" role="alert">
    <strong><i class="fa fa-warning"></i> Notice</strong> <marquee><p style="font-family: Impact; font-size: 18pt">Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor Lorem ipsum dolor!</p></marquee>
</div>


</body>
</html>