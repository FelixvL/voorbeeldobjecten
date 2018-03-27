<?php

    include "classes.php";
    $megaDAO = new MegaDAO();
    $vechter = $megaDAO->getVechterFromId($_GET['id']);
    echo $vechter->naam;

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

