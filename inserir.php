<?php
include "conexao.php";
$n = $_POST['nome_digitado'];
$e = $_POST['email_digitado'];

$sql = "INSERT INTO tb_inscricoes (nome, email) VALUES ('$n', '$e')";

$cadastrar = $pdo->prepare($sql);

try{
    $cadastrar->execute();
    header("Location: inscricao_confirmada.php");
}catch(PDOException $erro){
    echo "Falha ao cadastrar".$erro->getMessage();
}
?>