<h2><?php echo $post['title']; ?></h2>

<small class="post-date">Posted on: <?php echo $post['created_at'];?></small><br>
<img class="img-fluid" src="<?php echo base_url(); ?>assets/images/posts/<?php echo $post['post_image']?>" >
<div class="post-body">
<?php echo $post['body']?>
</div>



<?php if($this->session->userdata('user_id') == $post['user_id']): ?>
  <hr>
  <div style="display:flex;dlex-direction:row;">
  <div>
  <a class="btn btn-primary" href="edit/<?php echo $post['slug']; ?>">Edit</a>
</div>

<div>
<?php echo form_open('/posts/delete/'.$post['id']); ?>
  <input type="submit" value="delete" class="btn btn-danger">
</form>
</div>
</div>
<hr>
<?php endif; ?>

<h3>Comments</h3>
<?php if($comments) : ?>    
  <?php foreach($comments as $comment): ?>
     <div class="shadow p-1 mb-2 bg-white rounded">
     <h5><?php echo $comment['body'] ?> [ by <strong><?php echo $comment['name'] ?></strong>]</h5>
     </div>    
       <?php endforeach; ?>
<?php else: ?>
  <h5>No Comment</h5>
<?php endif; ?> 
<hr>
<h3>Add Comment</h3>
<?php echo validation_errors();  ?>
<?php 
   echo form_open('comments/create/'.$post['id']); ?>
   <div class="form-group">
    <label>Name</label>
    <input type="text" name="name" class="form-control">
   </div>

   <div class="form-group">
    <label>Email</label>
    <input type="text" name="email" class="form-control">
   </div>

   <div class="form-group">
    <label>Body</label>
    <textarea  name="body" class="form-control"></textarea>
   </div>
   <input type="hidden" name="slug" value="<?php $post['slug']?>">
   <button class="btn btn-primary" type="submit">Submit</button>
   
</form> 
