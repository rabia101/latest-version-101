<?php 

include "vendor_header.php";
require_once "../db.php";
   
$d=$_SESSION['uid'];

        
        
   
?>
<!-- Header -->
<div class="w3-container" style="margin-top:80px" id="showcase">
    <h1 class="w3-jumbo"><b>Order </b></h1>
    <h1 class="w3-xxxlarge w3-text-red"><b>Detail</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
  </div>
<div class="container mt-3">
<h2>Custom Search</h2>
  <p>Type something in the input field</p>  <input class="form-control" id="myInput" type="text" placeholder="Search..">
  <br>
  <table class="table table-bordered w3-responsive" id="Table">
    <thead>
      <tr>
      <th>Order ID</th>
        
        <th>Customer Name</th>
        <th>Product</th>
        <th>Address</th>
        <th> City</th>
        <th>Qty</th>
        <th>Price</th>
        <th></th>
        <th></th>
        <th class="w3-text-red"></th>
        <th></th>
      </tr>
    </thead>
    <tbody id="myTable">
      
    <?php
echo $sql = "SELECT * FROM `cart` where  vendor_id = '".$d['id']."' order by `id` DESC";
$result = $conn->query($sql);
if ($result->num_rows > 0):
  while($row = $result->fetch_assoc()):
    // output data of each row
     
?>
   
      <tr>
      <td><?=$row['id']?></td>
        <td><?=$row['customer_name']?></td>
        <td><?=$row['prd_name']?></td>
        <td><?=$row['address']?></td>
        <td><?=$row['vendor_city']?></td>
        <td><?=$row['prd_qty']?></td>
        <td><?=$row['prd_price']?></td>
        <td></td>
        <td></td>
        <td></td>

      </tr>
  <?php endwhile;endif;?>
    </tbody>
  </table>
  
  <p>Note that we start the search in tbody, to prevent filtering the table headers.</p>
</div>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.css"/>
 
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.18/datatables.min.js"></script>

<script>
$(document).ready(function(){
    var orderdataTable = $('#Table').DataTable({
				"columnDefs":[],
			});
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>