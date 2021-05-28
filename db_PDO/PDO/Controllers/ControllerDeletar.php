<?php

include("../Class/ClassCrud.php");

$Crud = new ClassCrud();
$IdUser = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);

$dell = $Crud->deleteDB("cadastro", "Id=?", array($IdUser));

if($dell){
    header("Location: ../selecao.php"); 
}

