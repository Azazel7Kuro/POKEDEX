
<?php ob_start(); ?>
<?php $titre = "Pokémon - Accueil" ?>

<html>
<div id="home">
    <h1> Bienvenue dans l'application </h1>
    <img src="Public/logo.png" alt="Logo de la franchise Pokémon" width="350">
</div>
</html>

<?php 
    $content = ob_get_clean();
    require("gabarit.php"); 
?>
