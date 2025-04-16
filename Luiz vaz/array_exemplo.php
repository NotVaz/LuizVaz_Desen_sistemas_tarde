<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Exemplo</title>
</head>
<body>
    <?php
    #rand-gera um inteiro aleatorio
    $sorteio=rand( 0 ,5 );
    echo "Sorteado: $sorteio <hr/>";
    #array_merge-Combina um ou mais arrays
    #range-Cria uma array contendo uma faixa de elementos
    # (inicio, fim, passo)
    $vetor=array_merge( range( 0 , 10 ),
                        range ($sorteio, 10, 2),
                        array ($sorteio) );
    print_r($vetor);
    echo "<hr/>";
    #embaralha
    shuffle($vetor);
    print_r($vetor);
    echo "<hr/>";
    foreach ($vetor as $vetor)
    {
        echo 'O valor', $vetor, 'tem 3 elementos, <br/>';
    }
    ?>
</body>
</html>