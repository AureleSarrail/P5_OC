<?php

$viewTitle = "Connection";

ob_start();

?>

<div class="row">
    <form action="index.php?action=testConnect" method="POST" class='text-center'>
        <label>Votre Mail : <input type="text" name="mail"></label><br>
        <label>Votre mot de passe : <input type="password" name="password"></label><br>
        <input type="submit">
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