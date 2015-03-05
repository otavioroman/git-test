<!doctype html>
<html>
    <head>
        <meta charset ="UTF-8">
        <meta name="author" content="Otávio Roman">
        <title>operacoes</title>
    </head>
    <body>
        <?php include 'operacoes.php';
        $x=3;
        $y=7;
        echo $x.' + '.$y.' = '.soma_valores($x,$y).'<br>';
        echo $x.' - '.$y.' = '.subtracao_valores($x,$y).'<br>';
        echo $x.' / '.$y.' = '.divisao_valores($x,$y).'<br>';
        echo $x.' * '.$y.' = '.multiplicacao_valores($x,$y).'<br>';
        ?>        
    </body>
</html>