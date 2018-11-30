
<html>  
      <head>  
       
  <head>
           
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
           <!--Core CSS -->




</head>

<body style="background-color:#EAEAEA;">
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
      </head>  
      <body>  
           <div class="container">  
                <div class="table-responsive">
		     <div class="page-header">  
                     <h1 >SALES ORDER TABLE</h1><br />
		     </div>  
	<h4>Select Customer ID:</h4>
	<?php
	$host = "localhost";
	$db_name = "saharakbar";
	$username = "root";
	$password = "";
	$conn = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
	$stmt = $conn->prepare("select customer_id from customer_13117");
	$stmt->execute();
    	echo "<select id='customer_id' class='form-control'>";
	echo '<option value="">None</option>';
    	while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) { 
                  echo '<option value="'.$row["customer_id"].'">'.$row["customer_id"].'</option>';                
	}
    	echo "</select>";
	?>
	<br />
                     <div id="live_data"></div>            
                </div>  
           </div>  
      </body>  
</html>  
<script>  
 $(document).ready(function(){  
	var Customer_id = $('#customer_id').val();
      $("#customer_id").change(function(){
            Customer_id = $('#customer_id').val();
	       fetch_data();
      });
      
      function fetch_data()  
      {  
           $.ajax({  
                url:"retrieve.php",  
                method:"POST",  
		data:{ customer_id : Customer_id},  
                dataType:"text",
                success:function(data){  
                     //console.log('Data', data);
                     $('#live_data').html(data);  
                }  
           });  
      }  
      
      fetch_data();  
      
      $(document).on('click', '#btn_add', function(){  
           var so_id = $('#so_id').text();  
           var customer_id = customer_id;
	      var date = $('#date').text();
	      var sp_id = $('#sp_id ').val();
	      var product_code = $('#product_code').val();
	      var quantity = $('#quantity').text(); 
	      var ratee = $('#rate').text();
	      var quantity = parseInt(quantity);
	      var rate = parseInt(ratee);
	      var amount = quantity*rate;
           
          //  console.log('sp_id', sp_id);
          //  console.log('product_code', product_code);
          //  console.log('quantity', quantity);
          //  console.log('ratee', ratee);
          
           
          //  if(so_id == '')  
          //  {  
          //       alert("Enter Order Number");  
          //       return false;  
          //  }    
          //  if(date == '')  
          //  {  
          //       alert("Enter date");  
          //       return false;  
          //  }   
          //  if(quantity == '')  
          //  {  
          //       alert("Enter Quantity");  
          //       return false;  
          //  }  
          console.log('Customer ID: ', customer_id);
           $.ajax({  
                url:"create_so.php",  
                method:"POST",  
                data: { so_id : so_id, customer_id : customer_id, date:date, sp_id:sp_id, product_code:product_code, quantity:quantity, rate:rate, amount:amount},  
                dataType:"text",  
                success:function(data)  
                {  
                    console.log('Record inserted');
                    fetch_data();  
                    console.log(data);
                },  
                error: function () 
                {
                    console.log('error 505');
                }
           })  
      });  
      function edit_data(id, text, column_name)  
      {  

           console.log('ID: ', id);
           console.log('text: ', text);
           console.log('column_name: ', column_name);

           $.ajax({  
                url:"edit_so.php",  
                method:"POST",  
                data: { id:id, text:text, column_name:column_name},  
                dataType:"text",  
                success:function(data)
				{  
                    fetch_data();
                }  
           });  
      }  
      $(document).on('blur', '.so_id', function(){  
           var id = $(this).data("id1");  
           var so_id = $(this).text();  
           edit_data(id, so_id, "so_id");  
      });   
      $(document).on('blur', '.date', function(){  
           var id = $(this).data("id3");  
           var date = $(this).text();  
           edit_data(id, date, "date");  
      });  
      $(document).on('blur', '.sp_id', function(){  
           var id = $(this).data("id4");  
           var sp_id = $(this).val();  
           edit_data(id, sp_id, "sp_id");  
      });
      $(document).on('blur', '.product_code', function(){  
           var id = $(this).data("id5");  
           var product_code = $(this).val();  
           edit_data(id, product_code, "product_code");  
      });  
      $(document).on('blur', '.Quantity', function(){  
           var id = $(this).data("id6");  
           var Quantity = $(this).text();  
           edit_data(id, Quantity, "Quantity");  
      });
      $(document).on('blur', '.Rate', function(){  
           var id = $(this).data("id7");  
           var Rate = $(this).text();  
           edit_data(id, Rate, "Rate");  
      });   
      $(document).on('click', '.btn_delete', function(){  
           var id=$(this).data("id9");  
           if(confirm("Are you sure you want to delete this?"))  
           {  
                $.ajax({  
                    url:"delete_so.php",  
                    method:"POST",  
                    data:{id:id},  
                    dataType:"text",  
                    success:function(data)
					{  
						fetch_data();  
                    }  
                });  
           }  
      });  
 });  
</script>