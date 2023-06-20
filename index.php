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
date_default_timezone_set('America/Sao_Paulo');
if (isset($_POST['enviar'])) {
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $momento_registro = date('Y-m-d H:i:s');

    $sql = $con->prepare("INSERT INTO `clientes` VALUES (null, ?, ?, ?)");
    $sql->execute(array($nome, $sobrenome, $momento_registro));

    echo 'Cliente inserido com sucesso!';
}

?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conexão Banco de Dados</title>
</head>

<body>
    <form method="post">
        Nome: <input type="text" name="nome" require><br/>
        Sobrenome: <input type="text" name="sobrenome" require><br/>
        <input type="submit" , name="enviar" , value="enviar">
    </form>
</body>

</html>