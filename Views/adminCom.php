<?php
$viewTitle = 'Gestion des Commentaires';

ob_start();

if (empty($comments)) { ?>
    <div class="row">
        <div class="col-lg-offset-3 col-lg-6">
            <p>Pas de commentaires a valider</p>
        </div>
    </div>
<?php
}
else {
    foreach ($comments as $com) {
        ?> 
        <div class="row">
            <div class="col-lg-offset-3 col-lg-6">
                 <p class="col-lg-12">Commentaire de <strong><?= $com->getUsername() ?></strong> le 
                    <strong><?= substr($com->getCreationDate(), -2); ?>/
                        <?= substr($com->getCreationDate(), 5, 2); ?>/
                        <?= substr($com->getCreationDate(), 0, 4); ?>
                    </strong>
                </p>
                <p class="col-lg-12"><?= nl2br($com->getContent()) ?></p>
                <a href="index.php?action=validCom&amp;comId=<?= $com->getIdCom() ?>">
                    <button class="col-lg-2">Valider</button>
                </a>
                <a href="index.php?action=deleteCom&amp;comId=<?= $com->getIdCom() ?>">
                    <button class="col-lg-offset-1 col-lg-2">Supprimer</button>
                </a>
            </div>  
            <br>
            <br>
            <hr>

        </div> <?php
    }
}

$viewContent = ob_get_clean();
require('Views/template.php');