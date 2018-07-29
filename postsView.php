
<?php $viewTitle = "Les Posts" ?>

<?php ob_start(); 

foreach ($posts as $p) 
{
	?>

	<div class="row">
		<div class="col-lg-offset-3 col-lg-6">
			<div class="row">
				<img class="col-lg-12" src="<?= $p->getImage(); ?>" alt="image_post">
			</div>
		</div>
	</div>

	<?php
}

$viewContent = ob_get_clean();

require_once('template.php');