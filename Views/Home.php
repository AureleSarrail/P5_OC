
<?php $viewTitle = "Acceuil" ?>

<?php ob_start(); ?>

<div class="row" id="title_bloc">
    <div class="col-lg-offset-2 col-lg-7">
        <img src="Style/images/photo.jpeg" alt="photo_de_moi" class="col-lg-1">
        <div class="col-lg-5">
            <p class="col-lg-12" id="name">Aurèle Sarrail</p>
            <p id="accroche" class="col-lg-12">Le développeur de votre future solution Web !</p>
        </div>  
    </div>  
</div>

<div class="row" id="pres_bloc">
    <div class="col-lg-12 text-center">
        <h2>Bienvenue dans ce Blog</h2>
        <br>
        <p>Dans ce Blog, j'essaierai de vous faire suivre mes projets, mes avancements.</p>
        <br>
        <p>Si vous souhaitez parcourir mon Cv, il est en téléchargement en cliquant 
            <a href="Style/files/cv.pdf">ici</a>.
        </p>
        <br>
        <p>Ici vous pourrez me suivre, voir mes derniers articles postés.</p>
        <br>
        <p>Vous pourrez également me contacter via le formulaire de contact ou les réseaux sociaux, 
        tant sur le plan professionnel que personnel.</p>
        <br>
        <p>Bonne visite à tous !</p>
        <br>
    </div>
</div>

<div class="row social_media">
    <div class="col-lg-12 text-center">
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

<div class="row">
    <div class="col-lg-12 text-center">
        <h2>
            Me Contactez
        </h2>
        <br>
        <p>Si vous souhaitez me contacter vous pouvez le faire via ce formulaire de contact,</p>
        <br>
        <p>Je prendrais le soin de vous répondre rapidement.</p>
    </div>
</div>

<div class="row">
    <div class="col-lg-offset-3 col-lg-6 text-center">
        <form action="index.php?action=mail" method="POST">
            <div class="form-row">
                <div class="form-group col-lg-6">
                    <label for="Name">Votre nom</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group col-lg-6">
                    <label for="Firstname">Votre prénom</label>
                    <input type="text" name="firstname" class="form-control">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-lg-12">
                    <label for="mail">Votre mail</label>
                    <input type="email" 
                        class="form-control" 
                        id="mail" 
                        placeholder="nom.prenom@exemple.com"
                        name="mail">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-lg-12">
                    <label for="mailContent">Votre Message</label>
                    <textarea class="form-control" 
                        id="mailContent" 
                        rows="10"
                        name="mailContent"></textarea>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-lg-offset-5 col-lg-2">
                    <input type="submit" value="Envoyer">
                </div>
            </div>
        </form>
    </div>
</div>

<br>
<br>
<br>

<?php $viewContent = ob_get_clean(); ?>

<?php require('Views/template.php'); ?>