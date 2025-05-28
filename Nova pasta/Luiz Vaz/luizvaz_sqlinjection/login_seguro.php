<?php
$servidor="localhost";
$usuario="root";
$senha="";
$banco="empresa_teste";
$conxao = new mysqli($servidor, $usuario, $senha, $banco);

if($conexao->connect_error){
    die("Erro de conexão:", $conexao->connect_error)
}

$stmt = $conexao->prepare("SELECT * FROM cliente_teste WHERE nome=?");
$stmt->bind_Parem("s", $nome)
$stmt->execute();

if($result->num_rows>0){
    header ("Location:area_restrite.php";)
  
    exit();
}else{
    echo"nome não encontrado";
}

$stmt->close();
$conexao->close();
?>
?>
