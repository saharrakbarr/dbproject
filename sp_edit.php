
<?php
// including the database connection file
include_once("config.php");
 
if(isset($_POST['update']))
{    
    $sp_id = $_POST['sp_id'];  
    $sp_name = $_POST['sp_name'];
    $contact_number = $_POST['contact_number'];
    $customer_assign = $_POST['customer_assign'];    
    
    
        //updating the table
        $result = mysqli_query($mysqli, "UPDATE salesperson_13117 SET sp_id ='$sp_id', sp_name='$sp_name', contact_number ='$contact_number', 
        customer_assign = '$customer_assign' WHERE sp_id = $sp_id");
        
        //redirectig to the display page. In our case, it is index.php
        header("Location: sp_table.php");
    }

?>
<?php
//getting id from url
$sp_id = $_GET['id'];
 
//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM salesperson_13117 WHERE sp_id = $sp_id");
 
while($res = mysqli_fetch_array($result))
{
    $sp_id = $res['sp_id'];  
    $sp_name = $res['sp_name'];
    $contact_number = $res['contact_number'];
    $customer_assign = $res['customer_assign'];    
    
    
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
    <title>Edit Sales Person</title>
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
                  <li><a ] href="user_table.php">User</a></li>
                  <li><a href="main.php">Customer</a></li>
                  <li><a href="product_table.php">Product</a></li>
                  <li><a href="sp_table.php">Sales Person</a></li>
                 <li><a href="table.php">Sales Order</a></li>
              <li><a href="logout.php">Log Out</a></li>
                </ul>
    <div class="column is-6 is-component" >

            <div class="inner">
            
                    <div class="control" >
                    <button class="button feather-button primary-button rounded" onclick="window.location.href='/sp_table.php'">Back to Sales Person Details</button>
<form action="sp_edit.php" method="post" name="form1">
       
            
                <label>Sales Person ID</label>
                
                <input class="input is-minimal is-rounded" type="text" name="sp_id" value="<?php echo $sp_id;?>">
                
                <label>Sales Person Name</label>
                
                <input class="input is-minimal is-rounded" type="text" name="sp_name" value="<?php echo $sp_name;?>">
                 
                <label> Contact Number</label>
                
                <input class="input is-minimal is-rounded" type="text" placeholder="" name="contact_number"value="<?php echo $contact_number;?>">
                
                <label>Customer Assign</label>
                
                <input class="input is-minimal is-rounded" type="text" placeholder="" name="customer_assign"value="<?php echo $customer_assign;?>">

                

                <div class="spacer"></div>

                <td><input type="hidden" name="sp_id" value=<?php echo $_GET['id'];?>></td>
                <td><input class="button feather-button primary-button rounded" type="submit" name="update" value="Update"></td>
                <div class="spacer"></div>
 
            </tr>
        </table>
    </form>
    
</body>
</html>