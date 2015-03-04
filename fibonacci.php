<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Otávio Roman">
        <title>primo</title>
    </head>
    <body>
        <?php
            $num=3;
            $f=0;
            $resultado=0;
            for ($i=0;$i<$num;$i++){
                $f=$resultado;
                $resultado=$resultado+$f;
            }
            echo $resultado;
        ?>
        
    </body>
</html>

