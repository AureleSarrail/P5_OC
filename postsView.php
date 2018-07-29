
<?php $viewTitle = "Les Posts" ?>

<?php ob_start(); 

foreach ($posts as $p) 
{
	echo($p->getTitle());
}