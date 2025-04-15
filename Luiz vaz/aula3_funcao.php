<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 3 função</title>
</head>
<body>
    <?php
        $name="Luiz Vaz";
        echo "<br>".$name;
        $length=strlen($name);
        echo "<br>".$name;
        $cmp=stremp($name,"JhonandeiroderaindooJhonatan");
        echo "<br>".$cmp;
        $index=strpos($name, 9, 5);
        echo "<br>".$index;
        $name=strtoupper($name);
        echo "<br>".$name;
        
    ?>

    <?php
        $cidade="Curitiba";
        $estado="PR";
        $idade="325";
        $frase_capital="A cidade de $cidade é a capital do $estado";
        echo "<h3>$frase_capital </h3>";
        echo "<h4>$frase_idade </h4>";

    ?>
</body>
</html>