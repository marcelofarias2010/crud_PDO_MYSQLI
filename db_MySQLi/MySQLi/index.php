
<?php 
session_start();
include './Includes/Header.php'; ?>

        <div class="content">
            <?php
            echo "<h1 style='text-align:center'> Seja bem vindo: ".$_SESSION['usuarioNome']."</h1>";
                include("Class/ClassCrud.php"); 
                
            ?>
        </div>

<?php include './Includes/Footer.php'; ?>
