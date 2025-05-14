<?php
require_once "conexao.php";

$conexao = conectarBanco();
//obtendo o ID via GET
$idCliente=$_GET['id']??null;
$cliente=null;
$msgErro="";
//função loal para buscar cliente por ID
function buscarClientePorid($idCliente, $conexao){
    $stmt=$conexao->prepare("SELECT id_cliente, nome, endereco,telefone, email FROM cliente WHERE id_cliente=:id");
    $stmt->bindparam("id", $idCliente,PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch();
}
    //se um Id foi enviado busca o cliente o banco
    if ($idCliente && is_numeric($idCliente)){
        $cliente=buscarClientePorid($idCliente,$conexao);

        if(!$cliente){
            $msgErro="Erro: Clinete não encontrado";
        }
    }else{
        $msgErro="Digite o ID do cliente para buscar os dados";
    }?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Atualizar Cliente</title>
        <link rel="stylesheat" href="style.css">
        <script>
        function habilitarEdicao(campo){
            document.getElementById(campo).removeAttribute("readonly");
        }
        </script>
    </head>
    <body>
        <h2>Atualizar Cliente</h2>
        <!--se houver erro, exibe a mensagem e o campo de buscar-->
        <?php if($msgErro):?>
            <p style="color:red;"><?=htmlspecialchars($msgErro)?></p>
            <form action="atualizarCliente.php" method="GET">
                <label for="id">ID do cliente:</label>
                <input type="number" id="id" name="id" required>
                <button type="submit">Buscar</button>
        </form>
        <?php else: ?>
            <!--Se um cliente foi encontardo exibe o formulario preenchido-->
            <form action="processaratualizacao.php" method="POST">
                <input type="hidden" name="id_cliente" value="<?=htmlspecialchars($cliente["id_cliente"]) ?>">

                <label for="nome">nome;</label>
                <input type="text" id="nome" name="nome" value="<?=htmlspecialchars($cliente["nome"])?>
                "readonly onclick="habilitarEdicao('nome')">

                <label for="nome">Endereço;</label>
                <input type="text" id="endereco" name="endereco" value="<?=htmlspecialchars($cliente["endereco"])?>
                "readonly onclick="habilitarEdicao('endereco')">

                <label for="nome">telefone;</label>
                <input type="text" id="telefone" name="telefone" value="<?=htmlspecialchars($cliente["telefone"])?>
                "readonly onclick="habilitarEdicao('telefone')">

                <label for="nome">E-mail;</label>
                <input type="text" id="email" name="email" value="<?=htmlspecialchars($cliente["email"])?>
                "readonly onclick="habilitarEdicao('email')">

                <button type="submit">Atualizar Cliente</button>
        </form>
        <?php endif; ?>

                
    </body>
    </html>
