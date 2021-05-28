<?php

include("../Includes/Variaveis.php");
include("../Class/ClassCrud.php");

$Crud=new ClassCrud();
$enquete = $Crud->insertDB("enquete", "?,?","is", array($Id, $Radio));

if($enquete){
    header("Location: ../index.php");
}

