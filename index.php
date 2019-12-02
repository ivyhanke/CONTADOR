<?php 
    require_once 'controller/Contador.php';
    $contador = new contador();  
    $contador->realizarContagem(0, 100);
?>