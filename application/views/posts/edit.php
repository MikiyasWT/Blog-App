<h2><?= $title; ?></h2>
<?php echo validation_errors(); ?>

<?php echo form_open('posts/update'); ?>
<input type="hidden" name="id" value="<?php echo $post['id']; ?>" >
<div class="mb-3">
 <label class="form-label">Title</label>
  <input class="form-control" type="text" name="title" placeholder="add title" value="<?php echo $post['title'];?>">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">body</label>
  <textarea id="editor" class="form-control" name="body"  placeholder="" rows="3"><?php echo $post['body'];?></textarea>
</div>
<div class="form-group" style="margin-bottom:10px">
<label>Category</label>
<select name="category_id" class="form-control">
 <?php foreach($categories as $category): ?>
  <option value="<?php echo $category['id'] ?>"><?php echo $category['name'] ?></option>
  <?php endforeach ?>
</select>
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>