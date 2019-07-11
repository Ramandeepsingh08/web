<html>
<head>
	
</head>
<body>
<?php
include("connection.php");

$sql= " select * from planet " ; 
$result = $conn->query($sql); 
?>

<table border=1 class="table table-striped"> 
<tr><td> Caption <td> Paragrah </tr>
<?php

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td> " . $row["caption"]. " <td> " . $row["p"]. " <td> <a href=del.php?caption=". $row["caption"]."> Delete </a>" . " <td> <a href=update.php?caption=". $row["caption"]."> Edit </a>"."</tr>";
	
    }
} else {
    echo "0 results";
}
$conn->close();
?>
 <a href="form.php">Add another Caption</a>
</table>

</body>

</html>
