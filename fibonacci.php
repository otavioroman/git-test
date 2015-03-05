<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Otávio Roman">
        <title>fibonacci</title>
    </head>
    <body>
        <?php
            $num=15;
            $f=1;
            $resultado=0;
            $resultado1=0;
            $resultado2=0;
            for ($i=0;$i<$num;$i++){
                $resultado=$resultado1+$resultado2+$f;
                $f=0;
                $resultado2=$resultado1;
                $resultado1=$resultado;
                
                echo $resultado.' ';
            }
            
        ?>
        
    </body>
</html>

