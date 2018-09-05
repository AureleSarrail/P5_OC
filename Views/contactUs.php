<?php
$viewTitle = 'Contactez Nous';

ob_start();
?>
<div class="row">
    <div class="col-lg-offset-3 col-lg-6">
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
                <div class="form-group col-lg-offset-5 col-lg-3">
                    <input type="submit" value="Envoyer">
                </div>
            </div>
        </form>
    </div>
</div>

<?php

$viewContent = ob_get_clean();

require_once('Views/template.php');