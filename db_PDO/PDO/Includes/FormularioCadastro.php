<style>
    .Resultado{
    display: none;
    float: left;
    border: 2px solid #00ff0d;
    background: #d8ffd5;
    padding: 15px;
    width: 70%;
    text-align: center;
    margin: 20px 15% 10px 15%;
    /*background: green;*/
}
</style>
<?php
include("./Class/ClassCrud.php");
/* Edição de dados */
if (isset($_GET['id'])) {
    $Acao = "Editar";

    $Crud = new ClassCrud();
    $BFetch = $Crud->selectDB("*", "cadastro", "where Id=?", array($_GET['id']));
    $Fetch = $BFetch->fetch(PDO::FETCH_ASSOC);
    $Id = $Fetch['Id'];
    $Nome = $Fetch['Nome'];
    $Sexo = $Fetch['Sexo'];
    $Cidade = $Fetch['Cidade'];
}
/* Cadastro novo */ 
else {
    $Acao = "Cadastrar";
    $Id = 0;
    $Nome = "";
    $Sexo = "";
    $Cidade = "";
}
?>
<div class="Resultado"></div>

<div class="container">
    <h1 class="text-center">Cadastro</h1>
    <div class="row">
        <div class="col-6">
            <form name="FormCadastro" id="FormCadastro" method="post" action="Controllers/ControllerCadastro.php">

                <input type="hidden" id="Acao" name="Acao" value="<?php echo $Acao; ?>">
                <input type="hidden" id="Id" name="Id" value="<?php echo $Id; ?>">

                <div class="form-group">
                    Nome: <br>
                    <input class="form-control" type="text" id="Nome" name="Nome" value="<?php echo $Nome; ?>">
                </div>

                <div class="form-group">
                    Sexo: <br>
                    <select class="form-control" name="Sexo" id="Sexo">
                        <option value="<?php echo $Sexo; ?>"><?php echo $Sexo; ?></option>
                        <option value="Masculino">Masculino</option>
                        <option value="Feminino">Feminino</option>
                    </select>
                </div>

                <div class="form-group">
                    Cidade: <br>
                    <input class="form-control" type="text" id="Cidade" name="Cidade" value="<?php echo $Cidade; ?>">
                </div>

                <div class="FormularioInput FormularioInput100 Center">
                    <input class="btn btn-success btn-lg" type="submit" value="<?php echo $Acao; ?>">
                </div>
            </form>
        </div>
    </div>

</div>
