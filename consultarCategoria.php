<?php
    include "conexao.php";

    $sql = "SELECT * FROM tb_categoria";

    $consultar = $pdo->prepare($sql);


    try{
        $consultar->execute();
        $resultados = $consultar->fetchAll(PDO::FETCH_ASSOC);
        echo "<option value=''>Selecione</option>";
        foreach($resultados as $item){
            $id = $item['id_categoria'];
            $nome = $item['nome_categoria'];
            echo "
            <option value='$id'>$nome</option>                      
            ";
        }
    }catch(PDOException $erro){
        echo "Falha ao consultar resultados!".$erro->getMessage();
    }
?>
