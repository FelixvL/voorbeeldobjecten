<?php

include "classes.php";




?>
<html>
    <head>
        <script src="functions.js"></script>
    </head>
    <body>
        Naam Tournooi<input type="text" id="naamtournooi"><br>
        Stad Tournooi<input type="text" id="stadtournooi"><br>
        Tijdstip Tournooi<input type="text" id="tijdstiptournooi"><br>
        Prijs Tournooi<input type="text" id="prijstournooi"><br>
        <input type="button" value="voeg toe" onclick="nieuwtournooi();"><br>
        <?php
            $megaDAO = new MegaDAO();
            echo $megaDAO->latenZien();
        ?>
        <hr>
        <hr>
        Naam Vechter<input type="text" id="naamvechter"><br>
        Gewicht Vechter<input type="text" id="gewichtvechter"><br>
        Specialisatie Vechter<input type="text" id="specialisatievechter"><br>
        SpecialTrick Vechter<input type="text" id="specialtrickvechter"><br>
        <input type="button" value="voeg toe" onclick="nieuwvechter();">
        <?php
            echo $megaDAO->vechterLatenZien();
        ?>
    </body>
</html>