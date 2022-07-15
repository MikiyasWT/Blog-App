
<?php  echo form_open('users/login'); ?>
<div style="margin-left:300px;margin-right:300px;margin-top:50px;">
<div class="form-outline mb-4">
<h1 class="text-center"><?php echo $title; ?></h1>
  </div>
  <!-- Email input -->
  <div class="form-outline mb-4">
  <input type="text" class="form-control" name="username" required autofocus placeholder="Enter Username">
  </div>

  <!-- Password input -->
  <div class="form-outline mb-4">
  <input type="password" class="form-control" name="password" required placeholder="Enter Password">
    
  </div>

  <!-- 2 column grid layout for inline styling -->
  <div class="row mb-3" style="margin:2px">
  <button type="submit" class="btn btn-primary btn-block">Login</button>
  </div>

  <!-- Submit button -->
  
</form>
</div>
<?php  echo form_close(); ?>

