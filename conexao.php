<?php
$maquina = "localhost";
$usuario = "root";
$senha = "root";
$nome_do_banco = "bd_ana_valeria";
try {
    $pdo = new PDO("mysql:host=$maquina;dbname=$nome_do_banco;charset=utf8", "$usuario", "$senha");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
} catch (PDOException $erro) {
    echo "Falha ao conectar com no BD: $nome_do_banco <br>" . $erro->getMessage();
}
?>
