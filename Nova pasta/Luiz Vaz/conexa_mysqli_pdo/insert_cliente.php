<?php

require_once "conexao.php";
$conexao = conectadb();

//definição dos valores para insercção
$nome = "Luiz Carlos Vaz";
$endereco = "Ruas kalamango, 32";
$telefone = "(41) 5555-5555";
$email = "Joaosilva@teste.com";
//prepare a consulta SQL usando prepare para evitar SQL injection
$stmt=$conexao->prepare("INSERT INTO cliente (nome, endereco, telefone, email) VALUES (?,?,?,?)");
//associe os param,etros aos valores da consulta
$stmt->bind_param("ssss",$nome,$endereco,$telefone,$email);
//executa a inserção
if ($stmt->execute()){
    echo "Cliente adicionado com sucesso!";
} else{
    echo "Erro ao adicionar cliente:".$stmt->error;
}
//fecha a consulta e a conexão com o banco de dados
$stmt->close();
$conexao->close();?>
