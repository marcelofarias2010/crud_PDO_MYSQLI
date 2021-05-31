<?php

session_start();
unset($_SESSION['nomeUser'], $_SESSION['senhaUser']);
header('Location: entrar.php');

