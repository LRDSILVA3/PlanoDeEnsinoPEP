<?php
//SOLICITA CONEXÃO COM O BANCO
$link = mysqli_connect("localhost", "root", "", "livro");
$Servidor = 'localhost';
$nomeBanco = 'livro';
$Usuario = 'root';
$Senha = '';
$strcon = mysqli_connect($Servidor,$Usuario,$Senha,$nomeBanco);
//CASO NÃO CONECTAR
if (!$link) {
    echo "Error: Falha ao conectar-se com o banco de dados MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
 //CASO CONECTAR
echo "" . PHP_EOL;
 
mysqli_close($link);
?> 