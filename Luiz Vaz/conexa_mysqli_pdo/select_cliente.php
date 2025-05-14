<?php
//inclui o arquivo de conexão com o banco de dados
require_once "conexao.php";
//estabelece conexão
$conexao=conectadb();
//define a consulta SQL para buscar clientes
$sql = "SELECT id_cliente, nome, email FROM cliente";
//executa a consulta no banco
$result = $conexao->query($sql);
//verifica se ha registro retornados
if($result->num_rows>0){
    //itera sobre os resultados e exibe cada cliente encontrado
    while($linha=$result->fetch_assoc()){
        echo "ID:".$linha["id_cliente"]."-nome:".$linha["nome"]."-Email:".$linha["email"]."<br/>";
    }
}else {
    //caso nenhuma resulatdo seja encontardo
    echo "Nenhum cliente cadastrado";}
    //fecha a conexão
    $conexao->close();  
    ?>