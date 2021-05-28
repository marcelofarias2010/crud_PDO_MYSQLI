<?php
session_start();
unset($_SESSION['usuario'], $_SESSION['senha']);
header('Location: entrar.php');


