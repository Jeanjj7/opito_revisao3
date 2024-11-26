<?php
include "conexao.php";

$nome_categoria = $_POST['nome_categoria'];


$sql = "INSERT INTO tb_categoria
        (nome_categoria) VALUES
        ('$nome_categoria')";

$cadastrar = $pdo->prepare($sql);

try{
    $cadastrar->execute();
    echo "Cadastrado com sucesso!!";
} catch(PDOException $erro){
    echo "Falha ao inserir!!".$erro->getMessage();
}
?>