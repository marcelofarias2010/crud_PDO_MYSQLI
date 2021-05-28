<?php

include("../Includes/Variaveis.php");
include("../Class/ClassCrud.php");

$Crud=new ClassCrud();
$enquete = $Crud->insertDB("enquete", "?,?",array($Id, $Radio));

if($enquete){
    header("Location: ../index.php");
}

