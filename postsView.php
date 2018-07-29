
<?php $viewTitle = "Les Posts" ?>

<?php ob_start(); 

foreach ($posts as $p) 
{
	?>

	<div class="row">
		<div class="col-lg-offset-3 col-lg-6">
			<div class="row">
				<img class="col-lg-3 img-responsive" src="<?= $p->getImage(); ?>" alt="image_post">
				<h1 class="col-lg-9"><a href="index.php?action=onePost&amp;postId=<?= $p->getPostId() ?>"><?= $p->getTitle() ?></a></h1>
				<h3 class="col-lg-12"><?= $p->getHead() ?></h3>
				<div class="row">		
					<p class="col-lg-12"><?= $p->getContent() ?></p>
					<em><p class="col-lg-12">Créé par <strong><?= $p->getUsername() ?></strong> le <strong><?= $p->getCreatDate(); ?></strong></p></em>
				</div>
			</div>
		</div>
	</div>

	<?php
}

$viewContent = ob_get_clean();

require_once('template.php');