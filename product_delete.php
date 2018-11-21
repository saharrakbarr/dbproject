
<?php


//including the database connection file
include("config.php");
 
//getting id of the data from url
$product_code = $_GET['id'];
 
//deleting the row from table
$result = mysqli_query($mysqli, "DELETE FROM product_13117 WHERE product_code = $product_code");
 
//redirecting to the display page (index.php in our case)
header("Location:product_table.php");


?>