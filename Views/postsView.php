
<?php $viewTitle = "Les Posts" ?>

<?php ob_start(); 

foreach ($posts as $post) 
{
    ?>

    <div class="row">
        <div class="col-lg-offset-3 col-lg-6 post_global">
                <img class="col-lg-3 img-responsive" src="<?= $post->getImage(); ?>" alt="image_post">
                <h1 class="col-lg-9"><a href="index.php?action=onePost&amp;postId=<?= $post->getPostId() ?>"><?= $post->getTitle() ?></a></h1>
                <h3 class="col-lg-12"><?= $post->getHead() ?></h3>
                <div class="row">       
                    <p class="col-lg-12"><?= $post->getContent() ?></p>
                    <em><p class="col-lg-12">Créé par <strong><?= $post->getUsername() ?></strong> 
                        le <strong><?= substr($post->getCreatDate(),-2); ?>/<?= substr($post->getCreatDate(),5,2); ?>/<?= substr($post->getCreatDate(),0,4); ?></strong></p></em>
                </div> 
        </div>
    </div>

    <?php
}

$viewContent = ob_get_clean();

require_once('Views/template.php');