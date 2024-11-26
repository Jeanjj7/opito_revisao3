<?php
include "conexao.php";

$sql = "SELECT * FROM vw_tudo";

$consultar = $pdo->prepare($sql);
try{
    $consultar->execute();
    $resultados = $consultar->fetchAll(PDO::FETCH_ASSOC);

    foreach ($resultados as $item) {
        $id_produto = $item['id_produto'];
        $nome_produto = $item['nome_produto'];
        $preco = $item['preco'];
        $fk_categoria = $item['fk_categoria'];
        $nome_categoria = $item['nome_categoria'];
        
        echo "
        <div id='cartoes'>
            ID do Produto: <span id='id_produto'>$id_produto</span><br>
            Nome do Produto: <span id='nome_produto'>$nome_produto</span><br>
            Preço: <span id='preco'>R$ $preco</span><br>
            Categoria: <span id='nome_categoria'>$nome_categoria</span><br>
            <span id='fk_categoria' hidden> $fk_categoria</span><br>
        </div>
        ";

    }
}catch(PDOException $erro) {
    echo "Falha ao consultar resultados! " . $erro->getMessage();
}


?>