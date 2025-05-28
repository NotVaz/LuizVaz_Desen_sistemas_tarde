<?php
//inclui o arquivo de conexão com o banco de dados
require_once "conexao.php";
//estabelece conexão
$conexao=conectadb();
$id_cliente=2;
$stmt= $conexao->prepare("DELETE FROM cliente WHERE id_cliente=?");
$stmt->bind_param("i", $id_cliente);
//executa a exclusão
if($stmt->execute()){
    echo "cliente excluido com sucesso!";
}else {
    echo "Erro ao excluir Cliente:",$stmt->arror;}

    $stmt->close();
    $conexao->close();
    ?>
