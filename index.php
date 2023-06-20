<?php
    $servername = "localhost";
    $dbname = "banco_php";
    $username = "root";
    $password = "mortadela1";
    try {
        $con = new PDO("mysql:host=$servername;dbname=$dbname;port=3306", $username, $password);
        $con->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        echo "Conectado com sucesso";
    } catch (\PDOException $ex) {
        echo $ex->getMessage();
    }