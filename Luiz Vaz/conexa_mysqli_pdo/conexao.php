<?php
//habilita relatório detalhado do erro no Myqsl
mysqli_report(MYSQLI_REPORT_ERROR/MYSQLI_REPORT_STRICT);
function conectadb(){
$endereco="localhost";
$usuario="root";
$senha="";
$banco="Empresa";

try{
    $con= new mysqli($endereco,$usuario,$senha,$banco);
    //definição do conjunto de caracteres para evitar erro de acentuação
    $con->set_charset("utf8mb4");
    return $con;
}catch(Exception $e){
    die("Erro de conexão:". $e->getMessage());
}
}
?>