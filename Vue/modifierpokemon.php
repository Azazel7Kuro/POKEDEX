<?php ob_start(); ?>

<html>
    <body>
    <div id="content">
    <h1> Modifier Pokémon </h1>
    <form action="" method="POST">
    <p id="pokemon">
        <label> Pokémon : </label>
        <select name="idPokemon" id="selectPokemon"> 
            <?php
                foreach ($pokedex as $val){
                    echo '<option value="'.$val->getId().'">'.$val->getName().'</option>';
                }
            ?>
        </select>
    </p>
    <p>
        <label> Taille : </label>
        <input type="number" name="taillePokemon" id="taillePokemon" required="1">
    </p>
    <p>
        <label> Poids : </label>
        <input type="number" name="poidsPokemon" id="poidsPokemon" required="1">
    </p>
    <p>
        <input type="submit">
    </p>
    </form>
    </div>
    </body>
</html>

<?php
if($_POST){
    $newtaille = $_POST['taillePokemon'];
    $newpoids = $_POST['poidsPokemon'];
    $id = $_POST['idPokemon'];

    $pdo = getbdd("pokemon");
    
    $sqlsave = "SELECT pok_name,pok_height,pok_weight FROM pokemon WHERE pok_id = $id";
    $result = $pdo->query($sqlsave)->fetch(PDO::FETCH_OBJ);
    $savename = $result->pok_name;
    $saveheight = $result->pok_height;
    $saveweight = $result->pok_weight;
    
    $sql = "UPDATE pokemon set pok_height = $newtaille, pok_weight = $newpoids where pok_id = $id";
    $pdo->exec($sql);
    
    
    
    $dom = new DOMDocument();
    $dom->load("sources/histo.xml");
    $operations = $dom->getElementsByTagName('operations')->item(0);
    $root_element = $dom->createElement('operation');
    $type_element = $dom->createElement('type', 'modification');
    $horodate_element = $dom->createElement('horodate', date("d-m-Y H:i:s"));
    $desc_element = $dom->createElement('desc', 'La taille ('.$saveheight.'->'.$newtaille.') et le poids ('.$saveweight.'->'.$newpoids.') de '.$savename.' [ id = '.$id.'] modifiés.');
    $root_element->appendChild($type_element);
    $root_element->appendChild($horodate_element);
    $root_element->appendChild($desc_element);
    $operations->appendChild($root_element);
    $dom->save("sources/histo.xml");
}

?>
<?php
    $content = ob_get_clean();
    require("gabarit.php"); 
?>
