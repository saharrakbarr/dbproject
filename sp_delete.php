
<?php


//including the database connection file
include("config.php");
 
//getting id of the data from url
$sp_id = $_GET['id'];
 
//deleting the row from table
$result = mysqli_query($mysqli, "DELETE FROM salesperson_13117 WHERE sp_id = $sp_id");
 
//redirecting to the display page (index.php in our case)
header("Location:sp_table.php");


?>