<?php
    include "classes.php";
    $tournooiObj = cast('Tournooi', json_decode($_POST['tournooi']));
    $md = new MegaDAO();
    $md->opslaanTournooi($tournooiObj);
    
    /* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

