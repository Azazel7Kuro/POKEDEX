<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8" />
        <link rel="icon" href="Public/Sprite_magicarpe_shiny.png" type="image/png" />
        <link href="Public/style.css" rel="stylesheet" type="text/css">
        <title> <?= $titre ?> </title>
    </head>
    <body>
    <div id="global">
        <header>
            <table>
                <tbody>
                    <tr>
                        <td><a href="index.php?vue=accueil"> Accueil </a></td>
                        <td><a href="index.php?vue=test"> Test </a></td>
                        <td><a href="index.php?vue=modif"> Modifier Pokémon</a></td>
                        <td><a href="index.php?vue=histo"> Historisation </a></td>
                        <td><a> Afficher Pokémon </a></td>
                    </tr>
                </tbody>
            </table>
        </header>
        <div id="content">
                <?php echo $content ?>
        </div>
        <footer>
            <table>
                <tbody>
                    <tr>
                        <td> Licence 3 Informatique </td>
                        <td> 
                            <?php
                                date_default_timezone_set('UTC+1');
                                $today = date("d-m-Y H:i:s");
                                echo $today;
                            ?>
                        </td>
                    </tr>
                </tbody>
            </table>
        </footer>
    </div>
    </body>
</html>
                                
