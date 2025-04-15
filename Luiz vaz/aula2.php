<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //Função usada para definir fuso horario padrão
        date_default_timezone_set('America/Los_Angeles');
        //Manipulando HTML e PHP
        $data_hoje = date("d/m/y", time());
        ?>
    <p align="center">Hoje é dia <?php echo $data_hoje; ?>
    </p>

    <?php
    echo "teste";
    echo "Olá Mundo";
    echo "Isso abrange várias linhas.As novas linhas serão saida também";
    echo "Isso abrange\nMultiplas linhas.A nova linha será\na saída também";
    echo "caracteres Escaping são geitos\"Como esse\".";
    ?>

    <?php
        $comida_favorita="italiana";
        print $comida_favorita[2];
        $comida_favorita="Cozinha".$comida_favorita;
        echo '<br>';
        print $comida_favorita;
    ?>
</body>
</html>