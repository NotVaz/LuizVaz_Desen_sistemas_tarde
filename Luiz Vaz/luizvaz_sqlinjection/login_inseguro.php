<?php
$servidor="localhost";
$usuario="root";
$senha="";
$banco="empresa_teste";
$conxao = new mysqli($servidor, $usuario, $senha, $banco);

if($conexao->connect_error){
    die("Erro de conexão:", $conexao->connect_error)
}

//captura os dados do formulario (nome de usuario)
$nome = $_POST["Nome"];

//executa a consulta SEM proteção contra SQL injection
$sql="SELECT*FROM cliente_teste WHERE nome='$nome'";
$result=$conexao->query($sql);

//se houver resultado, o login é considerado bem-sucedido
if($result->num_rows>0){
    header ("Location:area_restrite.php";
    //garenate que o coddigo para aqui para evitar execução indevida
    exit();
    )
}else{
    echo"nome não encontrado";
}
//fecha a conexão
$conexao->close();
?>