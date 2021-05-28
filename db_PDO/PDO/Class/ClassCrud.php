<?php

include __DIR__ . '/ClassConexao.php';

class ClassCrud extends ClassConexao {
    #Atributos

    private $Crud;
    private $Contador;

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
        $usuario = $user;
        $senha = $pass;

        $sql = "SELECT * FROM usuario WHERE usuario = :login' AND senha = :senha LIMIT 1";

        try {
            $databas = $this->conectaDB();
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }

        $statement = $databas->prepare($sql);

        $statement->execute(array(':login' => $usuario, ':senha' => $senha));
        $row = $statement->fetch();
        

        if (empty($row)) {
            $_SESSION['loginErro'] = "Usuário ou senha inválido";
            header("Location: entrar.php");
        } elseif (isset($row)) {
            $_SESSION['usuarioNome'] = $row['nome'];
            header("Location: index.php");
        }
    }

}
