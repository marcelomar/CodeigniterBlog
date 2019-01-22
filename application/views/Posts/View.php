<h2><?php echo $posts['title'] ;?></h2>
<div class="row">
<div class="col-md-3">
		<img class="post_thump" src="<?php echo base_url();?>images/posts/<?php echo $posts['post_image'];?>">
	</div>
	<div class="col-md-9">
		<small class="post_date"> Posted on:  <?php echo $posts['date'];?></small>
	<?php echo $posts['body']; ?>
</div>

<?php echo form_open('/posts/delete/'.$posts['posts_id']);?>
	<input type="submit" value="Delete" class="btn btn-danger"/>

	<a class="btn btn-default" href="edit/<?php echo $posts['posts_id']; ?>">Edit</a>
	</div>

</form>
