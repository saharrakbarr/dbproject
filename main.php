
<?php
//including the database connection file
include_once("config.php");
 
//fetching data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM customer_13117 ORDER BY customer_id"); // using mysqli_query instead
?>
 
<html>
<head>    
       <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
   



    <!--Core CSS -->

<link rel="stylesheet" href="assets/css/core.css">

    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Homepage</title>
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
    <br/>

    <h1>CUSTOMER DETAILS</h1>
    
    <br/>
    <br/>

    <button class="button feather-button primary-button rounded" onclick="window.location.href='/add.html'">Add New Customer</button>

    <br><br/>

    <table class="table">
    <thead class="thead-light">
    <tr class = "table-primary"> 
    <th scope="col" >Customer ID</th>
            <th scope="col">Shop Name</td>
            <th scope="col">Customer Name</td>
            <th scope="col">Contact Number</td>
            <th scope="col">Address</td>
            <th scope="col">Area</td>
            <th scope="col">Geographical Coordinates</td>
	        <th scope="col">Update</td>
        </tr>
    </tr>
  </thead>
  
      
            
        <?php 
       

        while($res = mysqli_fetch_array($result)) {         
            echo "<tr>";
            echo "<td>".$res['customer_id']."</td>";
            echo "<td>".$res['shop_name']."</td>";
            echo "<td>".$res['customer_name']."</td>";    
            echo "<td>".$res['contact_number']."</td>";
            echo "<td>".$res['address']."</td>";
            echo "<td>".$res['area']."</td>";
            echo "<td>".$res['geo_coordinates']."</td>";
            echo "<td><a href=\"edit.php?id=$res[customer_id]\">Edit</a> | <a href=\"delete.php?id=$res[customer_id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";        
        }
        ?>
    </table>

  	
</body>
</html>