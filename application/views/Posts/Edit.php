<h2><?=  $title;?></h2>
<?php echo validation_errors();?>
<?php echo form_open('posts/update');?>
<input type="hidden" name ="posts_id" value="<?php echo $post['posts_id'];?>">
  <div class="form-group">
    <label>Title</label>
    <input type="text" name="title" class="form-control" placeholder="add title" 
    value="<?php echo $post['title'];?>">
  </div>
  <div class="form-group">
    <label>Body:</label>
    <textarea name="body" id="editor1" class="form-control"><?php echo $post['body'];?></textarea>
  </div>
  <div class="form-group">
  <label for="category">Select post Category</label>
    <select name="category_id" class="form-control">
    <?php foreach($categories as $category):?>
      <option value="<?php echo $category['category_id'];?>">
       <?php echo $category['name'];?>
       </option>
      <?php endforeach; ?>
    </select>
  </div>
  <div class="form-group">
    <label>Title</label>
    <input type="file" name="userfile" class="form-control"
    value="<?php echo $post['post_image'];?>">
  </div>
  <button type="submit" class="btn btn-default">Edit</button>
</form>