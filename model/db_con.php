<?php

class conexao {

    function conn()
    {
        try{
            $conn = new PDO('mysql:host=localhost; dbname=lanchonete', 'root', '');
            return $conn;
        } catch (Exception $e) {
            return "Error: " . $e->getMessage();
        }
    }

}

?>