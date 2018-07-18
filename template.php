<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title><?= $ViewTitle ?></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container-fluid">
		<header class="col-lg-12" id="header">
			<h3 class="col-lg-3">Blog AS-DEV</h3>
			<ul>
				<li class="col-lg-2"><a href="#acceuil">Acceuil</a></li>
				<li class="col-lg-2"><a href="#Posts">Les Posts</a></li>
				<li class="col-lg-2"><a href="#contact">Contactez nous</a></li>
			</ul>
		</header>

		<?= $ViewContent ?>

		<footer class="col-lg-12">
			<ul>
				<li class="col-lg-2"><a href="#acceuil">Acceuil</a></li>
				<li class="col-lg-2"><a href="#Posts">Les Posts</a></li>
				<li class="col-lg-2"><a href="#contact">Contactez nous</a></li>
				<li class="col-lg-push-3 col-lg-3"><a href="#connection">Connexion</a></li>
			</ul>
		</footer>
	</div>
</body>
</html>