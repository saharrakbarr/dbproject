
<?php  
 $connect = mysqli_connect("localhost", "root", "Abcd#1234", "saharakbar");  
 $sql = "DELETE FROM salesorder_13117 WHERE so_id = '".$_POST["id"]."'";  
 if(mysqli_query($connect, $sql))  
 {  
      echo 'Data Deleted';  
 }  
 ?>
