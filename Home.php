
<?php $ViewTitle = "Page acceuil" ?>

<?php ob_start(); ?>

<h1>Vous voici sur la page d'acceuil !</h1>

<?php $ViewContent = ob_get_clean(); ?>

<?php require('template.php'); ?>