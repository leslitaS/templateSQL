<?php

$emailUsuario = $_POST['emailUsuario'];
$dsn = "mysql:host=localhost;dbname=dbTemplate;port=3306";
$user = "root";
$pass = "";

$conexao = new PDO($dsn,$user,$pass);

$query= $conexao ->prepare('INSERT INTO emails (id_email, email)
VALUES (2,"'.$emailUsuario.'") ');


$resultado = $query->execute();

if ($resultado) {
    echo $resultado;
    echo " Deu tudo certo!";
} else {
    echo $resultado;
    echo "Deu tudo errado";
}
