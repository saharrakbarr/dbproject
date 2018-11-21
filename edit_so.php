
<?php
 $connect = mysqli_connect("localhost", "root", "Abcd#1234", "saharakbar"); 
$id=isset($_POST["id"])?$_POST["id"]:"";
$text=isset($_POST["text"])?$_POST["text"]:"";
$column_name=isset($_POST["column_name"])?$_POST["column_name"]:"";
$query = "UPDATE salaesorder_13117 SET ".$column_name."='".$text."' WHERE so_id='".$id."'";
if($column_name=='product_code'){
	$res = mysqli_query($connect, "SELECT product_salesprice FROM product_13117 WHERE product_code='".$text."'");
	$row = mysqli_fetch_array($res);
	mysqli_query($connect, "UPDATE salesorder_13117 SET Rate='".$row['product_salesprice']."' WHERE so_id='".$id."'");
}  
if(mysqli_query($connect, $query))
 {
      mysqli_query($connect, "UPDATE salesorder_13117 SET amount=rate*quantity WHERE so_id='".$id."'");
  echo 'Data Updated';
 }
?>
 
 
