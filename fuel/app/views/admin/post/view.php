<h2>Viewing #<?php echo $post->id; ?></h2>
<br>

<dl class="dl-horizontal">
	<dt>Title</dt>
	<dd><?php echo $post->title; ?></dd>
	<br>
	<dt>Body</dt>
	<dd><?php echo $post->body; ?></dd>
	<br>
</dl>

<div class="btn-group">
	<?php echo Html::anchor('admin/post/edit/'.$post->id, 'Edit', array('class' => 'btn btn-warning')); ?>
	<?php echo Html::anchor('admin/post', 'Back', array('class' => 'btn btn-default')); ?>
</div>
