

<?php echo validation_errors(); ?>

<?php echo form_open('users/register'); ?>
<div class="row d-flex justify-content-center align-items-center">
  <div class="col-md-4 col-md">
  <h2><?= $title; ?></h2>
  <div class="form-group">
   <label>Name</label>
   <input type="text" class="form-control" name="name"> 
 </div>

 <div class="form-group">
   <label>Zipcode</label>
   <input type="text" class="form-control" name="zipcode"> 
 </div>

 <div class="form-group">
   <label>Email</label>
   <input type="text" class="form-control" name="email"> 
 </div>

 <div class="form-group">
   <label>Username</label>
   <input type="text" class="form-control" name="username"> 
 </div>

 <div class="form-group">
   <label>Password</label>
   <input type="password" class="form-control" name="password"> 
 </div>

 <div class="form-group">
   <label>Confirm Password</label>
   <input type="password" class="form-control" name="password2" placeholder="confirm password"> 
 </div>

 <div class="form-group">
   
   <button type="submit" class="btn btn-primary btn-block" style="width:100%;margin-top:20px;">Submit</button> 
 </div>
  </div>
</div>
 

 

 

<?php echo form_close(); ?>