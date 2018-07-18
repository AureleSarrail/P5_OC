<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title><?php echo($ViewTitle); ?></title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container-fluid">
		<header id="header">
			<h3 class="col-lg-3">Blog AS-DEV</h3>
			<ul>
				<li class="col-lg-2"><a href="#acceuil">Acceuil</a></li>
				<li class="col-lg-2"><a href="#Posts">Les Posts</a></li>
				<li class="col-lg-2"><a href="#contact">Contactez nous</a></li>
			</ul>
		</header>

		<?php echo($ViewContent); ?>

		<footer class="col-lg-12">
			<h3 class="col-lg-3">Blog AS-DEV</h3>
			<ul>
				<li class="col-lg-2"><a href="#acceuil">Acceuil</a></li>
				<li class="col-lg-2"><a href="#Posts">Les Posts</a></li>
				<li class="col-lg-2"><a href="#contact">Contactez nous</a></li>
			</ul>
		</footer>
	</div>
</body>
</html>