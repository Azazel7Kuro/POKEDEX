<?php $titre = "Pokémon - Erreur"; ?>

<?php ob_start(); ?>
<html>

<div id="home">
<h1>Une erreur est survenue : <?= $msgErreur ?> </h1>
</div>

</html>
<?php $content = ob_get_clean(); ?>

<?php require("gabarit.php"); ?>

