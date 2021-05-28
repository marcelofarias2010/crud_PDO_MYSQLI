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
    $sim = 0;
    $nao = 0;
    $Crud = new ClassCrud();
    $BSim = $Crud->selectDB("*", "enquete", "where Voto=?", "s", array("Sim"));
    $BNao = $Crud->selectDB("*", "enquete", "where Voto=?", "s", array("Não"));

    while ($rowSim = $BSim->fetch_assoc()){
        $FSim = $rowSim['Voto'];
        $sim++;
    }
    while ($rowNao = $BNao->fetch_assoc()){
        $FNao = $rowNao['Voto'];
        $nao++;
    }
//    var_dump($nao);
    
//    $FSim = $BSim->count();
//    $FNao = $BNao->count();
//
    echo "Votaram sim: " . $sim . "<br>";
    echo "Votaram não: " . $nao . "<br>";
    ?>
</div>

<?php include("Includes/Footer.php"); ?>
