
<?php
// including the database connection file
include_once("config.php");
 
if(isset($_POST['update']))
{    
    $id = $_POST['id'];  
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    
        //updating the table
        $result = mysqli_query($mysqli, "UPDATE user_13117 SET  username='$username', password ='$password' WHERE id = $id");
        
        //redirectig to the display page. In our case, it is index.php
       header("Location: user_table.php");
    }

?>
<?php
//getting id from url
$id = $_GET['id'];
 
//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM user_13117 WHERE id = $id");
 
while($res = mysqli_fetch_array($result))
{
    $id = $res['id'];  
    $username = $res['username'];
    $password = $res['password'];
    $sp_id = $res['sp_id'];
   
}
?>


<html>
<link rel="stylesheet" type="text/css" href="styles.css">
    <!--Core CSS -->
<link rel="stylesheet" href="assets/css/bulma.css">
<link rel="stylesheet" href="assets/css/core.css">
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC:100,400" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500" rel="stylesheet">
<head>    
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Edit User</title>
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
                  <li><a href="sp_table.php">Sales Person</a></li>
                  <li><a href="table.php">Sales Order</a></li>
              <li><a href="logout.php">Log Out</a></li>
                </ul>
    <div class="column is-6 is-component" >

            <div class="inner">
            
                    <div class="control" >
                    <button class="button feather-button primary-button rounded" onclick="window.location.href='/user_table.php'">Back</button> 
<form action="user_edit.php" method="post" name="form1">
       
            
                <label>Username</label>
                
                <input class="input is-minimal is-rounded" type="text" name="username" value="<?php echo $username;?>">
                
                <label>Password</label>
                
                <input class="input is-minimal is-rounded" type="password" name="password" value="<?php echo $password;?>">
                 
            
                <div class="spacer"></div>

                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input class="button feather-button primary-button rounded" type="submit" name="update" value="Update"></td>
                <div class="spacer"></div>

               
            </tr>
        </table>
    </form>
    
</body>
</html>