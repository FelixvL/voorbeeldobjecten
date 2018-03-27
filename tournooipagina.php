<html>
    <head>
        <script src="functions.js"></script>
    </head>
    <body>


<?php
    include "classes.php";
    $megaDAO = new MegaDAO();
    $tournooi = $megaDAO->getTournooiFromId($_GET['id']);
    echo $tournooi->stad;
    echo "AantalRonden<input type=text id=aantalrondenwedstrijd ><br>";
    echo "Tijdstip<input type=text id=tijdstipwedstrijd ><br>";
    echo $megaDAO->getAlleVechtersDropdown(1);
    echo $megaDAO->getAlleVechtersDropdown(2);
    echo "<input type=button value=maakmatch onclick=maakmatch()>";
    
?>
    </body>
</html>