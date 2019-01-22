<h2><?=  $title;?></h2>
<?php //echo validation_errors();?>
<?php echo form_open_multipart('posts/creat');?>
<?php if(isset($msg)){ ?>
<center><h3 style="color:green;">Data added successfully</h3></center>
<?php }?>
<div class="post-from">

  <div class="form-group">
    <label>Post Title</label>
    <input type="text" name="title" class="form-control" placeholder="add title">
	<?php echo form_error('title'); ?><br/>
  </div>
  <div class="form-group">
    <label>Post Body:</label>
    <textarea name="body" id="editor1" class="form-control"></textarea>
    <?php echo form_error('body'); ?><br/>
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
    <label>Select a Image</label>
    <input type="file" name="userfile" size="20" class="form-control">
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>
</div>
<!-- Modale-->
<div class="modal-dialog modal-sm">

</div>
