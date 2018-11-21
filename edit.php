
<?php
// including the database connection file
include_once("config.php");
 
if(isset($_POST['update']))
{    
    $customer_id = $_POST['customer_id'];  
    $shop_name = $_POST['shop_name'];
    $customer_name = $_POST['customer_name'];
    $contact_number = $_POST['contact_number'];    
    $address = $_POST['address'];
    $area = $_POST['area'];
    $geo_coordinates = $_POST['geo_coordinates']; 

        //updating the table
        $result = mysqli_query($mysqli, "UPDATE customer_13117 SET customer_id ='$customer_id', shop_name='$shop_name', customer_name ='$customer_name', contact_number = '$contact_number', 
        address = '$address', area = '$area', geo_coordinates = '$geo_coordinates' WHERE customer_id = $customer_id");
        
        //redirectig to the display page. In our case, it is index.php
        header("Location: main.php");
    }

?>
<?php
//getting id from url
$customer_id = $_GET['id'];
 
//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM customer_13117 WHERE customer_id = $customer_id");
 
while($res = mysqli_fetch_array($result))
{
    $customer_id = $res['customer_id'];
    $shop_name = $res['shop_name'];
    $customer_name = $res['customer_name'];
    $contact_number = $res['contact_number'];
    $address = $res['address'];
    $area = $res['area'];
    $geo_coordinates = $res['geo_coordinates'];
}
?>


<html>
<head>    
<link rel="stylesheet" type="text/css" href="styles.css">
    <!--Core CSS -->
<link rel="stylesheet" href="assets/css/bulma.css">
<link rel="stylesheet" href="assets/css/core.css">
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC:100,400" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500" rel="stylesheet">
<head>    
    <link rel="stylesheet" type="text/css" href="styles.css">
   
    <title>Edit Data</title>
</head>
 


<body>  
 <style>
                ul {
                    list-style-type: none;
                    margin: 0;
                    padding: 0;
                    overflow: hidden;
                    background-color: rgb(3, 65, 165);
                }
                
                li {
                    float: left;
                }
                
                li a {
                    display: block;
                    color: white;
                    text-align: center;
                    padding: 14px 16px;
                    text-decoration: none;
                }
                
                
                
                </style>
                </head>
                <body>
                
                <ul>
                <li><a  href="home.html">Home</a></li>
                  <li><a  href="user_table.php">User</a></li>
                  <li><a href="main.php">Customer</a></li>
                  <li><a href="product_table.php">Product</a></li>
                  <li><a href="sp_table.php">Sales Person</a></li>
                  <li><a href="table.php">Sales Order</a></li>
		
              <li><a href="logout.php">Log Out</a></li>
                </ul> 
     <div class="column is-6 is-component" >

            <div class="inner">
            
                    <div class="control" >
                    <button class="button feather-button primary-button rounded" onclick="window.location.href='/main.php'">Back to Customer Details</button>     

   
    <h1>Update Customer Details</h1>
    
    <form action="edit.php" method="post" name="form1">
       
                <label>Customer ID</label>
                <input class="input is-minimal is-rounded" type="text" name="customer_id"  placeholder=""value="<?php echo $customer_id;?>">
            
                <label>Shop Name</label>
                <input class="input is-minimal is-rounded"type="text" name="shop_name" placeholder="" value="<?php echo $shop_name;?>">
           
                <label>Customer Name</label>
                <input class="input is-minimal is-rounded"type="text" name="customer_name" value="<?php echo $customer_name;?>">
            
                <label>Contact Number</label>
               <input class="input is-minimal is-rounded"type="text" name="contact_number" value="<?php echo $contact_number;?>">
            
                <label>Address</label>
                <input class="input is-minimal is-rounded"type="text" name="address" value="<?php echo $address;?>">
          
                <label>Area</label>
                <input class="input is-minimal is-rounded"type="text" name="area" value="<?php echo $area;?>">
            
                <label>Geographical Coordinates</label>
                <input class="input is-minimal is-rounded"type="text" name="geo_coordinates" value="<?php echo $geo_coordinates;?>">
                <div class="spacer"></div>
                <input type="hidden" name="customer_id" value=<?php echo $_GET['id'];?>></td>
                <input  class="button feather-button primary-button rounded" type="submit" name="update" value="Update">
               
             
                </div>
            </div>
            </div>
            </tr>
        </table>
    </form>
    
</body>
</html>