<?php

require_once "conexao.php";

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $conexao=conectarBanco();

    $id=filter_var($_POST["id"],FILTER_SANITIZE_NUMBER_INT);

$sql="DELETE FROM cliente WHERE id_cliente= :id";
$stmt=$conexao->prepare($sql);
$stmt->bindParam(":id", $id,PDO::PARAM_INT);

try{
    $stmt->execute();
    echo"Cliente excluido com sucesso";
}catch (PDOException $e){
    error_log("Error ao excluir cliente:".$e->getMessage());
    Echo"Error ao excluir cliente";
}
}

?>