<?php ob_start(); ?>

<html>
<body>
    <div id="content">
        <h1> Historisation des opérations modifiant la base </h1>
        <h2> Modifier : </h2>
        <table>
        <thead>
            <tr>
                <th> Horodatage </th>
                <th> Description </th>
            </tr>
        </thead>
        <tbody>
        <?php
            $xml = simplexml_load_file("sources/histo.xml");
            foreach ($xml->operation as $operation){
            if ($operation->type == "modification"){
                echo '<tr><td>'.$operation->horodate.'</td>';
                echo '<td>'.$operation->desc.'</td></tr>';
            }
            }
        ?>
        </tbody>
        </table>
        <h3> Voir : </h3>
        <table>
        <thead>
            <tr>
                <th> Horodatage </th>
                <th> Description </th>
            </tr>
        </thead>
        <tbody>
        <?php
            $xml = simplexml_load_file("sources/histo.xml");
            foreach ($xml->operation as $operation){
            if ($operation->type == "voir"){
                echo '<tr><td>'.$operation->horodate.'</td>';
                echo '<td>'.$operation->desc.'</td></tr>';
            }
            }
        ?>
        </tbody>
        </table>
        <h4> Autre : </h4>
        <table>
        <thead>
            <tr>
                <th> Horodatage </th>
                <th> Description </th>
            </tr>
        </thead>
        <tbody>
        <?php
            $xml = simplexml_load_file("sources/histo.xml");
            foreach ($xml->operation as $operation){
            if ($operation->type == "other"){
                echo '<tr><td>'.$operation->horodate.'</td>';
                echo '<td>'.$operation->desc.'</td></tr>';
            }
            }
        ?>
        </tbody>
        </table>
        
    </div>
</body>
</html>
<?php
    $content = ob_get_clean();
    require("gabarit.php"); 
?>
