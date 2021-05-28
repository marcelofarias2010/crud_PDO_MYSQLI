<?php
include("Includes/Header.php");
include("Class/ClassCrud.php");
?>

<div class="container text-center">
    <form name="FormEnquete" id="FormEnquete" action="Controllers/ControllerEnquete.php" method="post">
        Você gostou do curso: <br>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="radio" name="Radio" value="Sim"> Sim
            </label>
        </div>
        <div class="form-check">
            <label class="form-check-label">
                <input class="form-check-input" type="radio" name="Radio" value="Não"> Não
            </label>
        </div>         
        <input class="btn btn-success" type="submit" value="Votar">
    </form>
</div>

<div class="container">
    <?php
    $Crud = new ClassCrud();
    $BSim = $Crud->selectDB("*", "enquete", "where Voto=?", array("Sim"));
    $BNao = $Crud->selectDB("*", "enquete", "where Voto=?", array("Não"));

    $FSim = $BSim->rowCount();
    $FNao = $BNao->rowCount();

    echo "Votaram sim: " . $FSim . "<br>";
    echo "Votaram não: " . $FNao . "<br>";
    ?>
</div>

<?php include("Includes/Footer.php"); ?>
