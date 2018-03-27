<?php
    include "classes.php";
    $vechterObj = cast('Vechter', json_decode($_POST['vechter']));
    $md = new MegaDAO();
    $md->inschrijvenVechter($vechterObj);
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

