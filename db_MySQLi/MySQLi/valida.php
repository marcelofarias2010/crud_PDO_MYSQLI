<?php
session_start();

include './Class/ClassCrud.php';

$crud = new ClassCrud();

if((isset($_POST['txtUsuario'])) && (isset($_POST['txtSenha']))){
     $user = filter_input(INPUT_POST, 'txtUsuario',FILTER_SANITIZE_SPECIAL_CHARS);
     $pass = filter_input(INPUT_POST,'txtSenha',FILTER_SANITIZE_SPECIAL_CHARS);
     
     $crud->validarUser($user, $pass);
}

