<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Clientes</title>
    <link rel="stylesheat" href="style.css">
    <!--Arquivo opcionau para estilizar-->
</head>
<body>
    <h2>cadastro de Cliente</h2>
    <form action="processarinsercao.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
        <label for="endereco">Endereço:</label>
        <input type="text" id="endereco" name="endereco" required>

        <label for="telefone">Telefone:</label>
        <input type="text" id="telefone" name="telefone" required>
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>

        <button type="submit">cadastrar Cliente</button>
</form>
</body>
</html>

