<?php

$viewTitle = 'Creation du compte';

ob_start();

?>

<div class="row">
    <form action="index.php?action=createUser" class="col-lg-offset-4 col-lg-3" method="POST">
        <div class="row">
            <label class="col-lg-4">Votre Prénom</label><input class="col-lg-6" type="text" name="firstName"><br>
            <label class="col-lg-4">Votre nom</label><input class="col-lg-6" type="text" name="name"><br>
            <label class="col-lg-4">Votre Pseudo</label><input class="col-lg-6" type="text" name="username"><br>
            <label class="col-lg-4">Votre mail</label><input class="col-lg-6" type="text" name="mail"><br>
            <label class="col-lg-4">Votre mot de passe</label><input class="col-lg-6" type="password" name="password"><br>
            <input type="submit" class="col-lg-offset-5 col-lg-4">
        </div>
    </form>
</div>

<?php

$viewContent = ob_get_clean();

require_once('template.php');