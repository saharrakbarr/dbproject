
<?php
//including the database connection file
include_once("config.php");
 
//fetching data in descending order (lastest entry first)
$result1 = mysqli_query($mysqli, "SELECT id, username, active FROM user_13117 WHERE username = 'admin'");
$result = mysqli_query($mysqli, "SELECT * FROM user_13117 WHERE username<>'admin'"); 
//$result1 = mysqli_query($mysqli, "SELECT * FROM user_13117 WHERE username = 'admin'"); // using mysqli_query instead
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
                  <li><a ]href="user_table.php">User</a></li>
                  <li><a href="main.php">Customer</a></li>
                  <li><a href="product_table.php">Product</a></li>
                  <li><a href="sp_table.php">Sales Person</a></li>
                  <li><a href="table.php">Sales Order</a></li>
              <li><a href="logout.php">Log Out</a></li>
                </ul>
    <br/>

    <h1>USER DETAILS</h1>
    
    <br/>
    <br/>
    <button class="button feather-button primary-button rounded" onclick="window.location.href='/user_add.html'">Add New User</button>
   

    <br><br/>
  
    <table class="table">
    <?php>
   
    <?>
  <thead class="thead-light">
    <tr class = "table-primary"> 
    <th scope="col">User ID</th>
      <th scope="col">Username</th>
      <th scope="col">Password</th>
      
      <th scope="col">Sales Person ID</th>
      <th scope="col">Active</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
    <?php 
     
     $admin_row = mysqli_fetch_array($result1);
     echo "<tr class = admin_row>";
     echo "<td>".$admin_row['id']."</td>";
     echo "<td>".$admin_row['username']."</td>";
    
     echo "<td>"." "."</td>";
     echo "<td>"." "."</td>";
     echo "<td>"." "."</td>";


        while($res = mysqli_fetch_array($result)) {         
            echo "<tr>";
            echo "<td>".$res['id']."</td>";
            echo "<td>".$res['username']."</td>";
            echo "<td>".$res['password']."</td>";
               
            echo "<td>".$res['sp_id']."</td>";
            echo "<td>".$res['active']."</td>";
            echo "<td><a href=\"user_edit.php?id=$res[id]\">Edit</a> | 
            <a href=\"user_delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";        
        }
        ?>
    </table>

  	
</body>
</html>