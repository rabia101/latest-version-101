<?php 
include "header/header.php";?>
<br>
<h4>Create New Account</h4>
<br>
<form name="form1" action="process_register.php" role = "form"  method = "post">

   
    <div class = "form-group">
      <label for = "name">name</label>
      <input type = "text" class = "form-control" name = "customer_name" placeholder = "enter name " required="">
   </div>
    <div class = "form-group">
      <label for = "name">cnic</label>
      <input type = "text" class = "form-control" name = "cnic" placeholder = "enter cnic " required="">
   </div>
     <div class = "form-group">
      <label for = "name">address</label>
      <input type = "text" class = "form-control" name = "address" placeholder = "enter address">
   </div>
     <div class = "form-group">
      <label for = "name">phoneno</label>
      <input type = "text" class = "form-control" name = "mobile_number" placeholder = "enter phoneno" required="">
   </div>
     <div class = "form-group">
      <label for = "name">email</label>
      <input type = "text" class = "form-control" name = "email" placeholder = "enter email " required="">
   </div>
   <div class = "form-group">
      <label for = "name">password</label>
      <input type = "text" class = "form-control" name = "password" placeholder = "enter password" required="">
   </div>
   <button type = "submit" class = "btn btn-default">Submit</button>
</form>
<br>








</div>

</body>
</html>
