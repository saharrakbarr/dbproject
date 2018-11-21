
<html>
<head>
    <title>Add Data</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
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
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) 
{    
    $customer_id = $_POST['customer_id'];
    $shop_name = $_POST['shop_name'];
    $customer_name = $_POST['customer_name'];    
    $contact_number = $_POST['contact_number'];
    $address = $_POST['address'];
    $area = $_POST['area'];
    $geo_coordinates = $_POST['geo_coordinates'];
        

        $result = mysqli_query($mysqli, "INSERT INTO customer_13117(customer_id, shop_name, customer_name, contact_number, address, area, geo_coordinates) VALUES('$customer_id', '$shop_name', '$customer_name', '$contact_number', '$address', '$area', '$geo_coordinates')");
        
        //display success messages
        echo "<font color='blue'>Customer Added Successfully.";
        echo "<br/><a href='main.php'>Back to Customer Records</a>";
}

?>
</body>
</html>