
<?php
//including the database connection file
include_once("config.php");
 
//fetching data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM product_13117 ORDER BY product_code"); // using mysqli_query instead
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
                  <li><a href="user_table.php">User</a></li>
                  <li><a href="main.php">Customer</a></li>
                  <li><a href="product_table.php">Product</a></li>
                  <li><a href="table.php">Sales Order</a></li>
              <li><a href="logout.php">Log Out</a></li>
                </ul>
    <br/>

    <h1>PRODUCT DETAILS</h1>
    
    <br/>
    <br/>
    <button class="button feather-button primary-button rounded" onclick="window.location.href='/product_add.html'">Add New Product</button>
   

    <br><br/>
  
    <table class="table">
    
  <thead class="thead-light">
    <tr class = "table-primary"> 
      <th scope="col">Product Code</th>
      <th scope="col">Product Brand</th>
      <th scope="col">Product Type</th>
      <th scope="col">Product Shade</th>
      <th scope="col">Product Size</th>
      <th scope="col">Product Sales Price</th>
      <th scope="col">Activity</th>
    </tr>
  </thead>
  


        <?php 
       

        while($res = mysqli_fetch_array($result)) {         
            echo "<tr>";
            echo "<td>".$res['product_code']."</td>";
            echo "<td>".$res['product_brand']."</td>";
            echo "<td>".$res['product_type']."</td>";    
            echo "<td>".$res['product_shade']."</td>";
            echo "<td>".$res['product_size']."</td>";
            echo "<td>".$res['product_salesprice']."</td>";
           
            echo "<td><a href=\"product_edit.php?id=$res[product_code]\">Edit</a> | 
            <a href=\"product_delete.php?id=$res[product_code]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";        
        }
        ?>
    </table>

  	
</body>
</html>