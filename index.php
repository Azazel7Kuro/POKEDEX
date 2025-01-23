<?php

require("Controleur/controller.php");

try {
if(isset($_GET["vue"])){
    if($_GET["vue"] == "accueil") accueil();
    else if($_GET["vue"] == "test") test();
    else if($_GET["vue"] == "modif") modif();
    else if($_GET["vue"] == "histo") histo();
}
else accueil();
}
catch (Exception $e) {
    $msgErreur = $e->getMessage();
    require("Vue/vueErreur.php");
}

?>
