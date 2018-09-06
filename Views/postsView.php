
<?php $viewTitle = "Les Posts" ?>

<?php ob_start();

foreach ($posts as $post) {
    ?>
    <div class="row">
        <div class="col-lg-offset-3 col-lg-6 post_global">
                <img class="col-lg-3 img-responsive" src="<?= $post->getImage(); ?>" alt="image_post">
                <h1 class="col-lg-9"><a href="index.php?action=onePost&amp;postId=<?= $post->getPostId() ?>">
                    <?= htmlspecialchars($post->getTitle()) ?></a></h1>
                <h3 class="col-lg-12"><?= htmlspecialchars($post->getHead()) ?></h3>
                <div class="row">       
                    <p class="col-lg-12"><?= nl2br(htmlspecialchars($post->getContent())) ?></p>
                    <em><p class="col-lg-12">Créé par <strong><?= htmlspecialchars($post->getUsername()) ?></strong> 
                        le <strong><?= htmlspecialchars(substr($post->getCreatDate(), -2)); ?>/
                            <?= substr(htmlspecialchars($post->getCreatDate()), 5, 2); ?>/
                            <?= substr(htmlspecialchars($post->getCreatDate()), 0, 4); ?></strong>
                    <?php if ($post->getLastModif() != $post->getCreatDate()) {
                        ?> Modifié le  
                        <strong><?= htmlspecialchars(substr($post->getLastModif(), -2)); ?>/
                        <?= substr(htmlspecialchars($post->getLastModif()), 5, 2); ?>/
                        <?= substr(htmlspecialchars($post->getLastModif()), 0, 4); ?></strong></p></em>
                   <?php } ?>
                </div> 
        </div>
    </div>
    <br>

    <?php
}

$viewContent = ob_get_clean();

require_once('Views/template.php');