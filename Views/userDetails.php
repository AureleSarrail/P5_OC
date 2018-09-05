<?php
$viewTitle = 'Détails Utilisateur';

ob_start();

?>

<div class="row">
    <div class="col-lg-offset-3 col-lg-6">
        <p class="col-lg-2"><strong><?= $user->getName() ?></strong></p>
        <p class="col-lg-2"><strong><?= $user->getFirstname() ?></strong></p>
    </div>
</div>

<?php

$viewContent = ob_get_clean();

require_once('Views/template.php');