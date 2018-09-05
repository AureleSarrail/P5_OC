
<?php $viewTitle = $post->getTitle();

ob_start(); ?>

<?php
if (isset($alert)) {
    echo($alert);
}
?>

<div class="row">
    <div class="col-lg-offset-3 col-lg-6 post_global">
        <img class="col-lg-3 img-responsive" src="<?= $post->getImage() ?>" alt="image_post">
        <h1 class="col-lg-9"><?= htmlspecialchars($post->getTitle()) ?></h1>
        <h3 class="col-lg-12"><?= htmlspecialchars($post->getHead()) ?></h3>
        <div class="row">       
            <p class="col-lg-12"><?= nl2br(htmlspecialchars($post->getContent())) ?></p>
            <em><p class="col-lg-12">Créé par <strong><?= htmlspecialchars($post->getUsername()) ?></strong> 
                    le <strong><?= substr(htmlspecialchars($post->getCreatDate()), -2); ?>/
                        <?= substr(htmlspecialchars($post->getCreatDate()), 5, 2); ?>/
                        <?= substr(htmlspecialchars($post->getCreatDate()), 0, 4); ?></strong></p></em>
        </div>
        <?php
        if (isset($_SESSION['rights']) && ($_SESSION['rights'] == 1)) {
            ?> <a href="index.php?action=modifyPost&amp;postId=<?= $post->getPostId() ?>">[Modifier]</a>  
            <a href="index.php?action=deletePost&amp;postId=<?= $post->getPostId() ?>">[Supprimer]</a> <?php
        } ?>
    </div>
</div>
<br>
<br>

<?php

foreach ($comments as $com) {
    ?>
    <div class="row">
        <div class="col-lg-offset-3 col-lg-6 com_global">
            <p class="col-lg-12">Commentaire de <strong><?= htmlspecialchars($com->getUsername()) ?></strong> le 
                <strong><?= substr(htmlspecialchars($com->getCreationDate()), -2); ?>/
                    <?= substr(htmlspecialchars($com->getCreationDate()), 5, 2); ?>/
                    <?= substr(htmlspecialchars($com->getCreationDate()), 0, 4); ?>
                </strong>
            </p>
            <p class="col-lg-12"><?= nl2br(htmlspecialchars($com->getContent())) ?></p>
            <br>
            <br>
            <hr>
        </div>
    </div>

    <?php
}

if (isset($_SESSION['rights'])) {
    ?> <div class="row">
        <div class="form-group">
            <form action="index.php?action=insertCom&amp;postId=<?= $post->getPostId() ?>" method="POST">
                <div class="col-lg-offset-3 col-lg-6">
                    <textarea class="col-lg-12" 
                        name="content" 
                        id="Content" 
                        cols="30" 
                        rows="2">Votre commentaire ici</textarea>
                    <input class="col-lg-offset-5 col-lg-2" type="submit">
                </div>
            </form>
        </div>
    </div>  
<?php }

?>

<a href="index.php?action=listPost">Retour à la liste des posts</a>

<?php


$viewContent = ob_get_clean();

require_once('Views/template.php');