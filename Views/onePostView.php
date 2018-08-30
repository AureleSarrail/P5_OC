
<?php $viewTitle = $post->getTitle();

ob_start(); ?>

<div class="row">
    <div class="col-lg-offset-3 col-lg-6 post_global">
        <img class="col-lg-3 img-responsive" src="<?= $post->getImage() ?>" alt="image_post">
        <h1 class="col-lg-9"><?= $post->getTitle() ?></h1>
        <h3 class="col-lg-12"><?= $post->getHead() ?></h3>
        <div class="row">       
            <p class="col-lg-12"><?= $post->getContent() ?></p>
            <em><p class="col-lg-12">Créé par <strong><?= $post->getUsername() ?></strong> 
                    le <strong><?= substr($post->getCreatDate(), -2); ?>/
                        <?= substr($post->getCreatDate(), 5, 2); ?>/
                        <?= substr($post->getCreatDate(), 0, 4); ?></strong></p></em>
        </div>
    </div>
</div>
<br>
<br>

<?php

foreach ($comments as $com) {
    ?>
    <div class="row">
        <div class="col-lg-offset-3 col-lg-6 com_global">
            <p class="col-lg-12">Commentaire de <strong><?= $com->getUsername() ?></strong> le 
                <strong><?= substr($com->getCreationDate(), -2); ?>/
                    <?= substr($com->getCreationDate(), 5, 2); ?>/
                    <?= substr($com->getCreationDate(), 0, 4); ?>
                </strong>
            </p>
            <p class="col-lg-12"><?= $com->getContent() ?></p>
            <br>
            <br>
            <hr>
        </div>
    </div>

    <?php
}

?>

<a href="index.php?action=listPost">Retour à la liste des posts</a>

<?php


$viewContent = ob_get_clean();

require_once('Views/template.php');