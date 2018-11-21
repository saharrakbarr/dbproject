
<?php  
 $connect = mysqli_connect("localhost", "root", "", "saharakbar");  
 $output = '';  
 $sql = "SELECT * FROM salesorder_13117 WHERE customer_id='".$_POST["customer_id"]."' ORDER BY so_id";  
 $sql1 = "SELECT * FROM customer_13117 WHERE customer_id='".$_POST["customer_id"]."'";
 $sql2 = "SELECT sp_id FROM salesperson_13117";
 $sql3 = "SELECT product_code FROM product_13117";
 $result = mysqli_query($connect, $sql);  
 $result1 = mysqli_query($connect, $sql1);
 $result2 = mysqli_query($connect, $sql2);
 $row = mysqli_fetch_array($result1);
 $output .= '  
	<h3>Invoice Header</h3>
	<table>
	 <tr>
	 <th style="background-color: 	#000099; padding: 20px;"><font color="white">Customer ID</th>
	 <th style="background-color: 	#000099; padding: 20px;"><font color="white">Shop Name</th>
	 <th style="background-color: 	#000099; padding: 20px;"><font color="white">Customer Name</th>
	 <th style="background-color: 	#000099; padding: 20px;"><font color="white">Contact Number</th>
	 <th style="background-color: 	#000099; padding: 20px;"><font color="white">Address</th>
	 <th style="background-color: 	#000099; padding: 20px;"><font color="white">Area</th>
	 <th style="background-color: 	#000099; padding: 20px;"><font color="white">Geographical Coordinates</th>
	 </tr>
	<tr>
	     <td style="background-color:  #ccccff; padding: 20px;">'.$row["customer_id"].'</td>
	     <td style="background-color:  #ccccff; padding: 20px;">'.$row["shop_name"].'</td>
	     <td style="background-color:  #ccccff; padding: 20px;">'.$row["customer_name"].'</td>
	     <td style="background-color: #ccccff; padding: 20px;">'.$row["contact_number"].'</td>
	     <td style="background-color: #ccccff; padding: 20px;">'.$row["address"].'</td>
	     <td style="background-color: #ccccff; padding: 20px;">'.$row["area"].'</td>
	     <td style="background-color: #ccccff; padding: 20px;">'.$row["geo_coordinates"].'</td>
	</tr>
	</table>
<h3>Invoice Lines</h3>
      <div class="table-responsive">  
           <table class="table table-bordered">  
                <tr>  
                     <th width="10%" style="padding: 20px;">Sales Order No.</th>  
                     <th width="40%" style="padding: 20px;">Customer ID</th>  
                     <th width="40%" style="padding: 20px;">Date</th> 
                     <th width="40%" style="padding: 20px;">Salesperson ID</th>
                     <th width="40%" style="padding: 20px;">Product Code</th>
                     <th width="40%" style="padding: 20px;">Quantity</th>
                     <th width="40%" style="padding: 20px;">Rate</th>
                     <th width="40%" style="padding: 20px;">Amount</th> 
                     <th width="10%" style="padding: 20px;">Action</th>  
                </tr>';  
 if(mysqli_num_rows($result) > 0)  
 {  
      while($row = mysqli_fetch_array($result))  
      {  
	   $result3 = mysqli_query($connect, $sql3);
	   $result2 = mysqli_query($connect, $sql2);
           $output .= '  
                <tr>  
                     <td class="so_id" data-id1="'.$row["so_id"].'" contenteditable>'.$row["so_id"].'</td>  
                     <td>'.$row["customer_id"].'</td> 
                     <td class="date" data-id3="'.$row["so_id"].'" contenteditable>'.$row["date"].'</td>
                     <td>';
		     $output .= '<select class="sp_id form-control" data-id4="'.$row["so_id"].'">';
			$output .= '<option value="">None</option>';
    			while ($row1 = mysqli_fetch_array($result2)) { 
                  	$output .= '<option value="'.$row1["sp_id"].'"'.($row["sp_id"]==$row1["sp_id"]?'selected="selected"':"").'>'.$row1["sp_id"].'</option>';                
			}
    			$output .= '</select>
			</td>
                     	<td>';
		     	$output .= '<select class="product_code form-control" data-id5="'.$row["so_id"].'">';
			$output .= '<option value="">None</option>';
    			while ($row2 = mysqli_fetch_array($result3)) { 
                  	$output .= '<option value="'.$row2["product_code"].'"'.($row["product_code"]==$row2["product_code"]?'selected="selected"':"").'>'.$row2["product_code"].'</option>';                
			}
    			$output .= '</select>
		     </td>
                     <td class="quantity" data-id6="'.$row["so_id"].'" contenteditable>'.$row["quantity"].'</td>
                     <td class="rate" data-id7="'.$row["so_id"].'" contenteditable>'.$row["rate"].'</td>
                     <td>'.$row["amount"].'</td> 
                     <td><button type="button" name="delete_btn" data-id9="'.$row["so_id"].'" class="btn btn-xs btn-danger btn_delete">Delete</button></td>  
                </tr>  
           ';  
      }  
      $output .= '  
           <tr>  
                <td id="so_id" contenteditable></td>  
                <td id="customer_id">'.$_POST["customer_id"].'</td>  
                <td id="date" contenteditable></td>  
                <td>';
		$output .= '<select id="sp_id" class="form-control">';
		$output .= '<option value="">None</option>';
		$result2 = mysqli_query($connect, $sql2);
    		while ($row1 = mysqli_fetch_array($result2)) { 
                  $output .= '<option value="'.$row1["sp_id"].'">'.$row1["sp_id"].'</option>';                
		}
    		$output .= '</select>
		</td>  
                <td>';
		$output .= '<select id="product_code" class="form-control">';
		$output .= '<option value="">None</option>';
		$result3 = mysqli_query($connect, $sql3);
    		while ($row2 = mysqli_fetch_array($result3)) { 
                  $output .= '<option value="'.$row2["product_code"].'">'.$row2["product_code"].'</option>';                
		}
    		$output .= '</select>
		</td>  
                <td id="quantity" contenteditable></td>  
                <td> - </td>  
                <td> - </td>  
                <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">Create</button></td>  
           </tr>  
      ';  
 }  
 else  
 {  
      $output .= '
		<tr>  
                <td id="so_id" contenteditable></td>  
                <td id="customer_id">'.$_POST["customer_id"].'</td>  
                <td id="date" contenteditable></td>  
                <td>';
		$output .= '<select id="sp_id" class="form-control">';
		$output .= '<option value="">None</option>';
		$result2 = mysqli_query($connect, $sql2);
    		while ($row1 = mysqli_fetch_array($result2)) { 
                  $output .= '<option value="'.$row1["sp_id"].'">'.$row1["sp_id"].'</option>';                
		}
    		$output .= '</select>
		</td>  
                <td>';
		$output .= '<select id="product_code" class="form-control">';
		$output .= '<option value="">None</option>';
		$result3 = mysqli_query($connect, $sql3);
    		while ($row2 = mysqli_fetch_array($result3)) { 
                  $output .= '<option value="'.$row2["product_code"].'">'.$row2["product_code"].'</option>';                
		}
    		$output .= '</select>
		</td>  
                <td id="quantity" contenteditable></td>  
                <td> - </td>  
                <td> - </td>  
                <td><button type="button" name="btn_add" id="btn_add" class="btn btn-xs btn-success">Create</button></td>  
           </tr>
<tr>  
                          <td colspan="4">Data not Found</td>  
                     </tr>';  
 }  
 $output .= '</table>  
      </div>';  
 echo $output;  
 ?>
</html>