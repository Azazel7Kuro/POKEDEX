<?php
ob_start();
$titre = "Pokémon - Test";

echo "<div id=test>";
echo"<pre>";
var_dump($pokedex);
echo"</pre>";
echo "</div>";

$content = ob_get_clean();
require("gabarit.php"); 

?>
