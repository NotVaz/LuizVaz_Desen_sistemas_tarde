<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $estado=array("PR","SC","SP","RJ","MG","BA","RN","AM");
    echo "ORIGINAL: ";
    print_r($estado);
    echo "<hr/>STRTOLOWER: converte uma string para minúsculas<br/>";
    for ($i=0; $i<count($estado); $i++){
        $estado[$i]=strtolower($estado[$i]);
    }
    echo "STRTOLOWER: ";
    print_r($estado);
    echo "<hr/>SHIFT: retira o primeiro elemento de um array<br/>";
    $rotaciona=array_shift($estado);
    echo "SHIFT: ";
    print_r($estado);
    echo "<hr/>POP: extrai um elemento do final do array<br/>";
    array_pop($estado);
    echo "POP: ";
    print_r($estado);
    echo "<hr/>PUSH: adiciona um ou mais elementos  no final de um array<br/>";
    array_push($estado,"pr");
    echo "PUSH: ";
    print_r($estado);
    echo "<hr/>REVERSE: Retorna um array com os elementos na ordem inversa<br/>";
    $inverso=array_reverse($estado);
    echo "REVERSE: ";
    print_r($inverso);
    echo "<hr/>SORT: ordena um array<br/>";
    sort($estado);
    echo "SORT: ";
    print_r($estado);
    echo "<hr/>SLICE: extrai uma parcela de um array<br/>";
    $dividir=array_slice($estado, 1, 2);
    echo "SLiCE: ";
    print_r($dividir);
    echo "<br/>";

    ?>
</body>
</html>