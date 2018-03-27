<?php
    include "classes.php";
    $tournooi = json_decode($_POST['tournooi']);
    $md = new MegaDAO();
    $md->opslaanTournooi($tournooi);
    
    /* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

