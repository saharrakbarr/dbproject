
<html>
<head>
    <title>Add User</title>
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
    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sp_id = $_POST['sp_id'];
        

        $result = mysqli_query($mysqli, "INSERT INTO user_13117 (id,username, password,sp_id) VALUES('$id','$username', '$password','$sp_id')");
        
        //display success messages
        echo "<font color='blue'>User Added Successfully.";
        echo "<br/><a href='user_table.php'>Back to User Records</a>";
}

?>
</body>
</html>