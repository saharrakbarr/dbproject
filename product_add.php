
<html>
<head>
<link rel="stylesheet" type="text/css" href="styles.css">
    <!--Core CSS -->
<link rel="stylesheet" href="assets/css/bulma.css">
<link rel="stylesheet" href="assets/css/core.css">
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC:100,400" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500" rel="stylesheet">
    <title>Add Product</title>
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
    $product_code = $_POST['product_code'];
    $product_brand = $_POST['product_brand'];
    $product_type = $_POST['product_type'];    
    $product_shade = $_POST['product_shade'];
    $product_size = $_POST['product_size'];
    $product_salesprice = $_POST['product_salesprice'];
    

        $result = mysqli_query($mysqli, "INSERT INTO product_13117(product_code, product_brand, product_type, product_shade, product_size, product_salesprice) VALUES
        ('$product_code', '$product_brand', '$product_type', '$product_shade', '$product_size', '$product_salesprice')");
        
        //display success messages
        echo "<font color='blue'>Product Added Successfully.";
        echo "<br/><a href='product_table.php'>Back to Product Records</a>";
}

?>
</body>
</html>