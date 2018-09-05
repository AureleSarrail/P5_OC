<?php

$viewTitle = 'Creation du compte';

ob_start();

?>

<div class="row">
    <form action="index.php?action=createUser" class="col-lg-offset-3 col-lg-6" method="POST">
        <div class="form-row">
            <div class="form-group col-lg-6">
                <label for="firstname">Votre Prénom</label>
                <input class="form-control" type="text" name="firstName">
            </div>
            <div class="form-group col-lg-6">
                <label for="name">Votre nom</label>
                <input class="form-control" type="text" name="name">
            </div>
            <div class="form-group col-lg-12">
                <label for="username">Votre Pseudo</label>
                <input class="form-control" type="text" name="username">
            </div>
            <div class="form-group col-lg-12">
                <label for="mail">Votre mail</label>
                <input class="form-control" type="text" name="mail">
            </div>
            <div class="form-group col-lg-12">
                <label for="password">Votre mot de passe</label>
                <input class="form-control" type="password" name="password">
            </div>
                <div class="form-group col-lg-offset-5 col-lg-2">
                <input type="submit" class="form-control">
            </div>
        </div>
    </form>
</div>

<?php

$viewContent = ob_get_clean();

require_once('template.php');