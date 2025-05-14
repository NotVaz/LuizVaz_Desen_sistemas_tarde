<?php
//inclui o arquivo de conexão com o banco de dados
require_once "conexao.php";
//estabelece conexão
$conexao=conectadb();
//define os novos valores
//      Ana Souza
$nome = "Mariana Silva  ";
$endereco = "Ruas kalamango, 32";
$telefone = "(41) 5555-5555";
$email = "Mariasilva@teste.com";
//define o ID do cliente a ser atualizado
$id_cliente=1;
//prepara a consulta SQL segura
$stmt=$conexao->prepare("UPDATE cliente SET nome=?, endereco=?, telefone=?, email=? WHERE id_cliente=?");
//Associe os parâmentros aos valores da consulta
$stmt->bind_param("ssssi",$nome, $endereco, $telefone, $email, $id_cliente);
//executa a atualização
if($stmt->execute()){
    echo "cliente atualizado com sucesso!";
}else {
    echo "Erro ao atualizar Cliente:",$stmt->arror;}
    //fecha a consulta e a conexão
    $stmt->close();
    $conexao->close();?>