<div>
	<a class="btn btn-success btn-share" href="<?php echo ROOT_PATH; ?>shares/add">Share something</a>
	<?php foreach($viewmodel as $item) : ?>
		<div class="card">
			<div class="card-body">
				<h2><?php echo $item['title']; ?></h2>
				<small><?php echo $item['create_date']; ?></small>
				<hr />
				<p><?php echo $item['body']; ?></p>
				<br />
				<a class='btn-default' href="<?php echo $item['link']; ?>" target="_blank">Go to website</a>
			</div>
		</div>
	<?php endforeach; ?>
</div>
