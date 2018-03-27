<?php
    include "classes.php";
    $megaDAO = new MegaDAO();
    $tournooi = $megaDAO->deleteTournooi($_GET['id']);
    header('Location: index.php');
