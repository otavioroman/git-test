<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Otávio Roman">
        <title>primo</title>
    </head>
    <body>
        <?php
            $num=7;
            $cont=0;
            
            for ($i=1;$i<=$num;$i++){

                if($num % $i == 0){
                    $cont++;
                }
            }
            if($cont>=3){
                echo 'O número '.$num.' não é primo';
            }
            else{
                echo 'O número '.$num.' é primo';
            }
           
        ?>
    </body>
</html>
