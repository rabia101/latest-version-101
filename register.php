<?php 
include "header/login_header.php";?>
<!-- <br>
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
<br> -->


<div class="container" >
 
  <div class="card">
    <div class="card-header"></div>
    <div class="card-body">
    <div class="container">
  <h2>Form Validation</h2>
  <p>You can Register As a <code>Supplier or User</code></p>
  <form action="/action_page.php" class="was-validated">
    <div class="form-group">
      <label for="uname">Username:</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter username" name="uname" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember" required> I agree on blabla.
        <div class="valid-feedback">Valid.</div>
        <div class="invalid-feedback">Check this checkbox to continue.</div>
      </label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>
    </div> 
    <div class="card-footer">Footer</div>
  </div>
</div>









<!-- 
</div>

</body>
</html> -->
<?php 
include "header/login_footer.php";?>