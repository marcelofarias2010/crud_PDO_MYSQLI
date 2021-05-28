<?php

abstract class ClassConexao {

    //Realiza a conexão com o banco de dados
    protected function conectaDB() {
        try {
            $con = new mysqli("localhost","root","senac","crud");
            return $con;
        } catch (Exception $erro) {
            return $erro->getMessage();
        }
    }

}
