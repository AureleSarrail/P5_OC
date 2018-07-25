<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title><?= $viewTitle ?></title>
	<link rel="stylesheet" href="style.css">
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
							<li class="list-inline-item"><button  type="button" class="btn btn-link"><a href="#acceuil">Acceuil</a></button></li>
							<li class="list-inline-item"><button  type="button" class="btn btn-link"><a href="#Posts">Les Posts</a></button></li>
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
				<div class="footer-copyright text-left py-3">
				<ul id="nav_head" class=" list-unstyled list-inline">
						<li><button  type="button" class="btn btn-link"><a href="#acceuil">Acceuil</a></button></li>
						<li><button  type="button" class="btn btn-link"><a href="#Posts">Les Posts</a></button></li>
						<li><button  type="button" class="btn btn-link"><a href="#contact">Contactez nous</a></button></li>
				</ul>
				 </div>
		</footer>
	</body>
</html>