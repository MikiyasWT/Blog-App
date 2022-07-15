<h2><?= $title; ?></h2>
<?php echo validation_errors(); ?>

<?php echo form_open_multipart('posts/create'); ?>
<div class="mb-3">
 <label class="form-label">Title</label>
  <input class="form-control" type="text" name="title" placeholder="add title">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">body</label>
  <textarea id="editor" class="form-control" name="body" placeholder="Blog body" rows="3"></textarea>
</div>
<div class="form-group" style="margin-bottom:10px">
<label>Category</label>
<select name="category_id" class="form-control">
 <?php foreach($categories as $category): ?>
  <option value="<?php echo $category['id'] ?>"><?php echo $category['name'] ?></option>
  <?php endforeach ?>
</select>
</div>
<div class="form-group" style="margin-bottom:10px">
<label>Upload Image</label>
<input type="file" name="userfile" size="20">
</div>

<button type="submit" class="btn btn-primary">Submit</button>
</form>