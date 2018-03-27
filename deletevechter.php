<?php

    include "classes.php";
    $megaDAO = new MegaDAO();
    $tournooi = $megaDAO->deleteVechter($_GET['id']);
    header('Location: index.php');

