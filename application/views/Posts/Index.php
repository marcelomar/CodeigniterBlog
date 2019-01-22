<h1><?= $title; ?></h1>

<?php foreach ($posts as $post):?>

<div class="row">
	<div class="col-md-3">
		<img class="post_thump" src="<?php echo base_url();?>images/posts/<?php echo $post->post_image;?>">
	</div>
	<div class="col-md-7">
	<h3><?php echo $post->title;?></h3>
		<small class="post_date">Posted on:  <?php echo $post->date;?>
	<strong>On: <?php echo $post->name;?></strong></small>
<p><?php echo word_limiter($post->body,30);?></p>
<p>
	<a class="btn btn-default" href="<?php echo site_url('/posts/'.$post->posts_id);?>">Read more</a>
</p>
	</div>
</div>
<?php endforeach; ?>