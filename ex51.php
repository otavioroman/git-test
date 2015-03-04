<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Victor Ferraresi">
        <title>array</title>
    </head>
    <body>
        <?php
        $array[1]="2K01";
        $array[2]="2J01";
        $array[3]="2K01";
        $array[4]="Tecnologia Wev II";
        $array[5]="Linguagem de Programação I";
        $array[6]="Linguagem de Programação I";
        $array[7]="Segunda";
        $array[8]="Terça";
        $array[9]="Quarta";
        $array[10]="Charles";
        $array[11]="João";
        $array[12]="Charles";
        
        echo '<table border = 1>
             <tr>
                <th>Turma</th>
                <th>Disciplina</th>
                <th>Semana</th>
                <th>Professor</th>
             </tr>
             <tr>
                <th>'.$array[1].'</th>
                <th>'.$array[4].'</th>
                <th>'.$array[7].'</th>
                <th>'.$array[10].'</th>
             </tr>
             <tr>
             <th>'.$array[2].'</th>
             <th>'.$array[5].'</th>
             <th>'.$array[8].'</th>
             <th>'.$array[11].'</th>
             </tr>
             <tr>
             <th>'.$array[3].'</th>
             <th>'.$array[6].'</th>
             <th>'.$array[9].'</th>
             <th>'.$array[12].'</th>
             </tr>
                '

        ?>
    </body>
</html>
