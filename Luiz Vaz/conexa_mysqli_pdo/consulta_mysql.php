<?php
//Definição das credenciais de acesso ao banco e dados
$nomeservidor = "localhost"; //Endereço do servidor
$usuario = "root";          //nome dousuario do banco
$senha = "";                //senha do banco
$bancodedados = "Empresa";  //nome do bancode dados

//criação da conexão com mysql
$conn = mysqli_connect($nomeservidor, $usuario, $senha, $bancodedados);

//verificação da conexão
//caso a conexão falhe, interrompe o script exibe uma mensagem de erro
if (!$conn){ die ("conexão falhou:".mysqli_connect_error());}

//configuração do conjunto de caracteres para evitar problemas de acentuação
mysqli_set_charset($conn, "utf8mb4");
//mensagem indicando que a conexão foi estabelecida corretamente
echo "conexão bem-sucedida!";
//consulta SQL para obter clientes
$sql = "SELECT id_cliente, nome, email FROM cliente";
$result = mysqli_query($conn, $sql);

//verifica se há resultados na consulta
if (mysqli_num_rows($result)>0){
    //itera sobre os resultados e exibe os dados
    while ($linha = mysqli_fetch_assoc($result)){
        echo "ID:".$linha["id_cliente"]."- Nome:".$linha["nome"]."-Email:".$linha["email"]."<br/>";}}else{
            echo"nenhum resultado encontrado";}
//fecha a conexão com o banco de dados
    mysqli_close($conn);
?>