<?php

$viewTitle = "Connection";

ob_start();

?>

<div class="row">
    <form action="index.php?action=testConnect" method="POST">
        <div class="form-row">
            <div class="form-group col-lg-offset-3 col-lg-6">
                <label>Votre Mail</label>
                <input type="text" name="mail" class="form-control">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-lg-offset-3 col-lg-6">
                <label>Votre mot de passe</label>
                <input type="password" name="password" class="form-control">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-lg-offset-5 col-lg-2">
                <input type="submit" class="form-control">
            </div>
        </div>
    </form>
    <br>
</div>

<div class="row">
    <div class="text-center col-lg-offset-3 col-lg-6">
        <a href="index.php?action=createAccount">Vous n'avez pas encore de compte - cliquez ici</a> 
    </div>
</div>

<?php

$viewContent = ob_get_clean();

require_once('Views/template.php');