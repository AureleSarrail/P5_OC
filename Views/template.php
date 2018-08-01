<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title><?= $viewTitle ?></title>
	<link rel="stylesheet" href="Style/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>


	<body>
		<div id="wrapper">
			<div class="container-fluid" id="main">
				<div id="header_global" class="row">
					<header class="col-lg-12">
						<div class="row">
							<h1 class="col-lg-3" div id="logo">Blog AS-DEV</h1>
							<ul id="nav_head" class=" list-unstyled list-inline col-lg-push-3 col-lg-6">
								<li class="list-inline-item"><button  type="button" class="btn btn-link"><a href="index.php">Acceuil</a></button></li>
								<li class="list-inline-item"><button  type="button" class="btn btn-link"><a href="index.php?action=listPost">Les Posts</a></button></li>
								<li class="list-inline-item"><button  type="button" class="btn btn-link"><a href="#contact">Contactez nous</a></button></li>
							</ul>
						</div>
					</header>
				</div>
				<!-- Début du contenu à rendre MVC ensuite -->

			<div id="content_block">
				<?= $viewContent ?>
			</div>

			<!-- Fin du contenu -->

			</div>
		</div>

		<footer id="footer" class="footer col-lg-12">
			<div class="row">
				<div class="footer-copyright text-left py-3 col-lg-12">
					<ul class=" list-unstyled list-inline footer_list">
						<li class="col-lg-offset-1 col-lg-1"><a href="index.php">Acceuil</a></li>
						<li class="col-lg-1"><a href="index.php?action=listPost">Les Posts</a></li>
						<li class="col-lg-2"><a href="#contact">Contactez nous</a></li>
						<li class="col-lg-offset-6 col-lg-1"><a href="#connexion">Se connecter</a></li>
					</ul>
				</div>
			</div>
		</footer>
	</body>
</html>