<?php
include __DIR__ . '/ClassConexao.php';

class ClassCrud extends ClassConexao {
    #Atributos

    private $Crud;
    private $Contador;
    private $login;
    private $senha;

    #Preparação das declarativas

    private function preparedStatements($Query, $Parametros) {
        $this->countParametros($Parametros);
        $this->Crud = $this->conectaDB()->prepare($Query);
        if ($this->Contador > 0) {
            for ($i = 1; $i <= $this->Contador; $i++) {
                $this->Crud->bindValue($i, $Parametros[$i - 1]);
            }
        }
        $this->Crud->execute();
    }

    #Contador de parâmetros

    private function countParametros($Parametros) {
        $this->Contador = count($Parametros);
    }

    #Inserção no Banco de Dados

    public function insertDB($Tabela, $Condicao, $Parametros) {
        $this->preparedStatements("INSERT INTO {$Tabela} VALUES ({$Condicao})", $Parametros);
        return $this->Crud;
    }

    #Seleção no Banco de Dados

    public function selectDB($Campos, $Tabela, $Condicao, $Parametros) {
        $this->preparedStatements("select {$Campos} from {$Tabela} {$Condicao}", $Parametros);
        return $this->Crud;
    }

    #Deletar dados no DB

    public function deleteDB($Tabela, $Condicao, $Parametros) {
        $this->preparedStatements("delete from {$Tabela} where {$Condicao}", $Parametros);
        return $this->Crud;
    }

    #Atualização no banco de dados

    public function updateDB($Tabela, $Set, $Condicao, $Parametros) {
        $this->preparedStatements("update {$Tabela} set {$Set} where {$Condicao}", $Parametros);
        return $this->Crud;
    }

    #validar usuário

    public function validaUser($user, $pass) {
        $this->login = $user;
        $this->senha = $pass;
        $sql = "SELECT * FROM usuario WHERE usuario = :login AND senha = :senha LIMIT 1";
        $this->Crud = $this->conectaDB()->prepare($sql);
        $this->Crud->bindValue(":login",$this->login);
        $this->Crud->bindValue(":senha",$this->senha);
        $this->Crud->execute();
        
        if ($this->Crud->rowCount() == 1) {
            while ($ln = $this->Crud->fetch(PDO::FETCH_ASSOC)) {
                $_SESSION['emailUser'] = $ln['usuario'];
                $_SESSION['senhaUser'] = $ln['senha'];
                $_SESSION['nomeUser'] = $ln['nome'];
                $_SESSION['idUser'] = $ln['id'];             
                
                header("Location:index.php");
            }
        } else {
            $_SESSION['loginErro'] = "Usuário ou senha inválido";
            header("Location:entrar.php");
        }
    }

}
