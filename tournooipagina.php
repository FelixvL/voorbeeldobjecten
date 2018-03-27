<?php
    include "classes.php";
    $megaDAO = new MegaDAO();
    $tournooi = $megaDAO->getTournooiFromId($_GET['id']);
    echo $tournooi->stad;
    
    echo $megaDAO->getAlleVechtersDropdown();
    echo $megaDAO->getAlleVechtersDropdown();
    
    /* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

