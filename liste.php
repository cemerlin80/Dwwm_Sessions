<?php require("protection_admin.php"); ?>

<?php if(isset($_SESSION["message"])): ?>
    <h1><?= $_SESSION["message"]?></h1>

<?php
        unset($_SESSION["message"]);
    endif;
 ?>

<h1>Liste des produits pour le BackOffice</h1>

Bonjour <?= $_SESSION["auth"]->login ?>


<h1>Liste des produits du frontoffice pour les utilisateurs</h1>

Bonjour <?= $_SESSION["auth"]->login ?>
