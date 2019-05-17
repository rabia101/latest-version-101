<?php 
require_once "../db.php";
include "vendor_header.php";?>

<!-- Contact/Area Container -->
<div class="w3-container" id="where" style="padding-bottom:32px;">
  <div class="w3-content" style="max-width:700px">
    <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">WHERE TO FIND US</span></h5>
    <p>Find us at some address at some place.</p>
    <img src="/w3images/map.jpg" class="w3-image" style="width:100%">
    <p><span class="w3-tag">FYI!</span> We offer full-service catering for any event, large or small. We understand your needs and we will cater the food to satisfy the biggerst criteria of them all, both look and taste.</p>
    <p><strong>Reserve</strong> a table, ask for today's special or just send us a message:</p>

    <form action="/action_page.php" target="_blank">
    <p><input class="w3-input w3-padding-16 w3-border" type="text" readonly="true" value="<?=$d['id']?>" id="user_id" name="user_id"></p>
    <p><input class="w3-input w3-padding-16 w3-border" type="text" readonly="true" value="<?=$d['customer_name']?>" id="vendor_name" name="vendor_name"></p>
    <p><input class="w3-input w3-padding-16 w3-border" type="text" readonly="true" value="<?=$d['city']?>" id="vendor_city" name="vendor_city"></p>
      <p><div class="form-group">
  <label for="category_id">Select Category:</label>
  <select class="form-control" name="category_id" id="category_id">
    <option>1</option>
    <option>2</option>
    <option>3</option>
    <option>4</option>
  </select>
</div></p>

<p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Product Name" required name="prd_name"></p>
     
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Quality...... A / B /C or good,bad" required name="prd_qualty"></p>
      <p><textarea class="w3-input w3-padding-16 w3-border" type="text" rows="5"  placeholder="Description....." required name="desc"></textarea></p>
      <p> <div class="custom-file">
    <input type="file" class="custom-file-input w3-padding-16 w3-border" id="customFile">
    <label class="custom-file-label" for="customFile">Choose file</label>
  </div></p>
      <p><button class="w3-button w3-black" type="submit">Add</button></p>
    </form>
  </div>
</div>
<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>