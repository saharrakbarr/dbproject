
<?php


//including the database connection file
include("config.php");
 
//getting id of the data from url
$customer_id = $_GET['id'];
 
//deleting the row from table
$result = mysqli_query($mysqli, "DELETE FROM customer_13117 WHERE customer_id = $customer_id");
 
//redirecting to the display page (index.php in our case)
header("Location:main.php");


?>