
<?php $viewTitle = $post->getTitle();

ob_start(); ?>

<div class="row">
	<div class="col-lg-offset-3 col-lg-6">
		<div class="row">
			<img class="col-lg-3 img-responsive" src="<?= $post->getImage() ?>" alt="image_post">
			<h1 class="col-lg-9"><?= $post->getTitle() ?></h1>
			<h3 class="col-lg-12"><?= $post->getHead() ?></h3>
			<div class="row">		
				<p class="col-lg-12"><?= $post->getContent() ?></p>
				<em><p class="col-lg-12">Créé par <strong><?= $post->getUsername() ?></strong> le <strong><?= $post->getCreatDate() ?></strong></p></em>
			</div>
		</div>
	</div>
</div>
<br>
<br>

<?php 

foreach ($comments as $com) 
{
	?>

	<div class="row">
		<div class="col-lg-offset-3 col-lg-6">
			<div class="row">
					<p class="col-lg-12">Commentaire de <strong><?= $com->getUsername() ?></strong> le <strong><?= $com->getCreationDate() ?></strong></p>
					<p class="col-lg-12"><?= $com->getContent() ?></p>
					<br>
					<br>
			</div>
		</div>
	</div>

	<?php
}




$viewContent = ob_get_clean();

require_once('template.php');