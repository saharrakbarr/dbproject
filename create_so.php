
<?php  
 $connect = mysqli_connect("localhost", "root", "Abcd#1234", "saharakbar"); 
$O_No=isset($_POST["so_id"])?$_POST["O_No"]:"";
$CID=isset($_POST["customer_id"])?$_POST["CID"]:"";
$date=isset($_POST["date"])?$_POST["date"]:"";
$SP_ID=isset($_POST["sp_id"])?$_POST["SP_D"]:"";
$P_Code=isset($_POST["product_code"])?$_POST["P_Code"]:"";
$Quantity=isset($_POST["quantity"])?$_POST["Quantity"]:"";
//$Rate=isset($_POST["Rate"])?$_POST["Rate"]:"";
$Amount=isset($_POST["amount"])?$_POST["amount"]:"";

 $res = mysqli_query($connect, "SELECT product_salesprice FROM product_13117 WHERE product_code='$product_code'");
 $row = mysqli_fetch_array($res);     
$Rate=$row["product_salesprice"];
 $sql = "INSERT INTO salesorder_13117 VALUES('$so_id','$customer_id','$date','$sp_id','$product_code','$quantity','$rate','$aount')";  
 if(mysqli_query($connect, $sql))  
 {  
      mysqli_query($connect, "UPDATE salesorder_13117 SET amount=($rate*$quantity) WHERE so_id='".$_POST["so_id"]."'");
      echo 'Data Inserted';  
 }  
 ?> 
