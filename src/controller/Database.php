<?php
    // Importando config e criando conexão com o banco de dados
    $config = include('../src/models/Database.php');
    $conn = new PDO("mysql:host=".$config['db']['host'].";dbname=".$config['db']['name'], $config['db']['user'], $config['db']['password'] );
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    function getDB() {
        global $conn;
        return $conn;
    }
?>
