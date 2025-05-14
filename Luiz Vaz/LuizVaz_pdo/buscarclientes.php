<?php
require_once 'conexao.php';

$conexao=conectarBanco();

//consulta todos os clientes do banco
//ordena por nome para melhorrar visualização

$sql="SELECt id_cliente,nome,endereco,telefone,email FROM cliente ORDER BY nome ASC";
$stmt=$conexao->prepare($sql);
$stmt->execute();
$clientes=$stmt->fetchAll();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de clientes</title>
    <link rel="stylesheat" href="styles.css">
</head>
<body>
    <h2>Todos os clientes cadastrados</h2>

    <?php if(!$clientes):?>
        <p style="color:red;">Nenhum Cliente encontradio  o banco de Dados.</p>
        <?php else:?>
            <table border="1">
            <th>ID</th>
            <th>Nome</th>
            <th>Endereço</th>
            <th>telefone</th>
            <th>E-mail</th>
        </tr>
        <?php foreach ($clientes as $cliente): ?>
        <tr>
            <td><?=htmlspecialchars($cliente["id_cliente"])?></td>
            <td><?=htmlspecialchars($cliente["nome"])?></td>
            <td><?=htmlspecialchars($cliente["endereco"])?></td>
            <td><?=htmlspecialchars($cliente["telefone"])?></td>
            <td><?=htmlspecialchars($cliente["email"])?></td>
            <td>
            <a href="atualizarcliente.php?id=<?=$cliente["id_cliente"]?>">Editar</a>
        </td>
        </tr>
            <?php endforeach; ?>
        </table>
        <?php endif;?>
</body>
</html>