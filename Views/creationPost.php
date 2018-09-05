<?php $viewTitle = "Creation Post";

ob_start();

if (isset($post)) { ?>
<div class="row">
    <div class="col-lg-offset-3 col-lg-6">
        <form action="index.php?action=postUpdated&amp;postId=<?= $post->getPostId() ?>" method="POST">
            <div class="form-row">
                <div class="form-group col-lg-12">
                    <label for="Title">Le titre</label>
                    <input type="text"  name="title" class="form-control" id="Title" maxlength="255" size="100" value="<?= $post->getTitle() ?>">
                </div>
                <div class="form-group col-lg-12">
                    <label for="Head">Le chapeau</label>
                    <input type="text" name="head" class="form-control" id="Head" maxlength="255" size="100" value="<?= $post->getHead() ?>">
                </div>
                <div class="form-group col-lg-12">
                    <label for="Image">L'URL de l'image</label>
                    <input type="text" name="image" class="form-control" id="Image" maxlength="255" size="100" value="<?= $post->getImage() ?>">
                </div>
                <div class="form-group col-lg-12">
                    <label for="Content">Le contenu</label>
                    <textarea name="content" class="form-control" id="Content" rows="10" cols="100"><?= nl2br($post->getContent()) ?></textarea>
                </div>
                <div class="row">
                    <input type="submit" class="col-lg-offset-5 col-lg-2 text-center">
                </div>
            
            </div>
        </form>
    </div>
</div>
<?php 
} else {
?>
<div class="row">
    <div class="col-lg-offset-3 col-lg-6">
        <form action="index.php?action=postCreated" method="POST">
            <div class="form-row">
                <div class="form-group col-lg-12">
                    <label for="Title">Le titre</label>
                    <input type="text"  name="title" id="Title" maxlength="255" size="100" class="form-control">
                </div>
                <div class="form-group col-lg-12">
                    <label for="Head">Le chapeau</label>
                    <input type="text" name="head" id="Head" maxlength="255" size="100" class="form-control">
                </div>
                <div class="form-group col-lg-12">
                    <label for="Image">L'URL de l'image</label>
                    <input type="text" name="image" id="Image" maxlength="255" size="100" class="form-control">
                </div>
                <div class="form-group col-lg-12">
                    <label for="Content">Le contenu : </label>
                    <textarea name="content" id="Content" rows="10" cols="100" class="form-control"></textarea>
                </div>
                <div class="row">
                    <input type="submit" class="col-lg-offset-5 col-lg-2 text-center">
                </div>
            </div>
        </form>
    </div>
</div>
<?php
}

$viewContent = ob_get_clean();

require_once('Views/template.php');
