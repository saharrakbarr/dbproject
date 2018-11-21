
<html>
<head>
<link rel="stylesheet" type="text/css" href="styles.css">
    <!--Core CSS -->
<link rel="stylesheet" href="assets/css/bulma.css">
<link rel="stylesheet" href="assets/css/core.css">
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC:100,400" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500" rel="stylesheet">
    <title>Add Sales Persont</title>
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
    $sp_id = $_POST['sp_id'];
    $sp_name = $_POST['sp_name'];
    $contact_number = $_POST['contact_number'];    
    $customer_assign = $_POST['customer_assign'];
   
    

        $result = mysqli_query($mysqli, "INSERT INTO salesperson_13117(sp_id, sp_name, contact_number, customer_assign) VALUES
        ('$sp_id', '$sp_name', '$contact_number', '$customer_assign')");
        
        //display success messages
        echo "<font color='blue'>SalesPerson Added Successfully.";
        echo "<br/><a href='sp_table.php'>Back to Sales Person Records</a>";
}

?>
</body>
</html>