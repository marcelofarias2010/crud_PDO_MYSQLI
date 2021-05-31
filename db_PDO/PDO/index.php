<?php
session_start();
if(!isset($_SESSION['nomeUser'])){
    header("Location:entrar.php");
}
include './Includes/Header.php';
echo "<h3 style='text-align:center'>Seja bem vindo ".$_SESSION['nomeUser']."</h3>";
?>

<div class="content">
    <?php
    include("Class/ClassCrud.php");
    ?>

    <div id="demo" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="Images/Losangeles.jpg" width="1260" height="560" alt="Los Angeles">
            </div>
            <div class="carousel-item">
                <img src="Images/chicago.jpg" width="1260" height="560" alt="Chicago">
            </div>
            <div class="carousel-item">
                <img src="Images/novaYork.jpg" width="1260" height="560" alt="New York">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>

    </div>
</div>

<?php include './Includes/Footer.php'; ?>
