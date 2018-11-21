
<?php
// including the database connection file
include_once("config.php");
 
if(isset($_POST['update']))
{    
    $product_code = $_POST['product_code'];  
    $product_type = $_POST['product_type'];
    $product_shade = $_POST['product_shade'];
    $product_size = $_POST['product_size'];    
    $product_brand = $_POST['product_brand'];
    $product_salesprice = $_POST['product_salesprice'];
    
        //updating the table
        $result = mysqli_query($mysqli, "UPDATE product_13117 SET product_code ='$product_code', product_brand='$product_brand', product_type ='$product_type', 
        product_shade = '$product_shade', product_size = '$product_size', product_salesprice = '$product_salesprice' WHERE product_code = $product_code");
        
        //redirectig to the display page. In our case, it is index.php
        header("Location: product_table.php");
    }

?>
<?php
//getting id from url
$product_code = $_GET['id'];
 
//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM product_13117 WHERE product_code = $product_code");
 
while($res = mysqli_fetch_array($result))
{
    $product_code = $res['product_code'];  
    $product_type = $res['product_type'];
    $product_shade = $res['product_shade'];
    $product_size = $res['product_size'];    
    $product_brand = $res['product_brand'];
    $product_salesprice = $res['product_salesprice'];
    
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
    <title>Edit Product</title>
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
                    <button class="button feather-button primary-button rounded" onclick="window.location.href='/product_table.php'">Back to Product Details</button>
<form action="product_edit.php" method="post" name="form1">
       
            
                <label>Product Code</label>
                
                <input class="input is-minimal is-rounded" type="text" name="product_code" value="<?php echo $product_code;?>">
                
                <label>Product Brand</label>
                
                <input class="input is-minimal is-rounded" type="text" name="product_brand" value="<?php echo $product_brand;?>">
                 
                <label> Product Type</label>
                
                <input class="input is-minimal is-rounded" type="text" placeholder="" name="product_type"value="<?php echo $product_type;?>">
                
                <label>Product Shade</label>
                
                <input class="input is-minimal is-rounded" type="text" placeholder="" name="product_shade"value="<?php echo $product_shade;?>">

                <label>Product Size</label>
                
                <input class="input is-minimal is-rounded" type="text" placeholder="" name="product_size"value="<?php echo $product_size;?>">
       
                <label>Product Sales Price</label>
                
                <input class="input is-minimal is-rounded" type="text" placeholder="" name="product_salesprice"value="<?php echo $product_salesprice;?>">

                <div class="spacer"></div>

                <td><input type="hidden" name="product_code" value=<?php echo $_GET['id'];?>></td>
                <td><input class="button feather-button primary-button rounded" type="submit" name="update" value="Update"></td>
                <div class="spacer"></div>

               
            </tr>
        </table>
    </form>
    
</body>
</html>