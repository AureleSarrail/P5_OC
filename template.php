<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>page test</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<div class="container-fluid" id="master_div">
	<body>
		<div id="wrapper">
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
				<div class="row" id="title_bloc">
					<div class="col-lg-offset-2 col-lg-7">
						<img src="images/photo.jpeg" alt="photo_de_moi" class="col-lg-1">
						<div class="col-lg-5">
							<p class="col-lg-12" id="name">Aurèle Sarrail</p>
							<p id="accroche" class="col-lg-12">Le développeur de votre future solution Web !</p>
						</div>	
					</div>	
				</div>

				<div class="row" id="pres_bloc">
					<div class="col-lg-push-2 col-lg-8">
						<h2>Bienvenue dans ce Blog</h2>
						<br>
						<p>Dans ce Blog, j'essaierai de vous faire suivre mes projets, mes avancements.</p>
						<br>
						<p>Si vous souhaitez parcourir mon Cv, il est en téléchargement en cliquant <a href="files/cv.pdf">ici</a>.</p>
						<br>
						<p>Ici vous pourrez me suivre, voir mes derniers articles postés.</p>
						<br>
						<p>Vous pourrez également me contacter via le formulaire de contact ou les réseaux sociaux, tant sur le plan professionnel que personnel.</p>
						<br>
						<p>Bonne visite à tous !</p>
						<br>
					</div>
				</div>

				<div class="row" id="social_media">
					<div class="col-lg-push-2 col-lg-8">
						<h2>Mes reseaux sociaux</h2>
						<br>
						<p>Ici vous pouvez retrouver les liens vers mes différents réseaux sociaux</p>
						<br>
						<ul>
							<li><a href="https://www.facebook.com/aurele.sarrail">Facebook</a></li>
							<li><a href="https://twitter.com/">Twitter</a></li>
							<li><a href="https://www.linkedin.com/in/aur%C3%A8le-sarrail-7737b6153/">Linkedin</a></li>
						</ul>
					</div>
				</div>
			</div>

			<!-- Fin du contenu -->
			<footer id="footer" class="page-footer font-small blue col-lg-12">
	  			<div class="footer-copyright text-left py-3">
	    			<ul id="nav_head" class=" list-unstyled list-inline">
							<li><button  type="button" class="btn btn-link"><a href="#acceuil">Acceuil</a></button></li>
							<li><button  type="button" class="btn btn-link"><a href="#Posts">Les Posts</a></button></li>
							<li><button  type="button" class="btn btn-link"><a href="#contact">Contactez nous</a></button></li>
					</ul>
	 			 </div>
			</footer>
		</div>
	</body>
</div>
</html>