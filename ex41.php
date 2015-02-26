<!doctype html>
<html>
    <head>
    <meta charset="UTF-8">
    <title>Gambiarra</title>
    </head>
    <body>
<?php
$p1 = 6;
$m1 = 8;
$m2 = 7;
$proj1 = 7;
$proj2 = 5;
$proj3 = 7;
$proj4 = 8;
$trabF = 4;
$proc = 8;
$pf = 6;
$mi = (30*p1 + 10*m1 + 10*m2 + 5*proj1 + 5*proj2 + 5*proj3 + 5*proj4 + 10*trabF + 20*proc)/100;
$mf = 0;
$aprovadoDireto = false;

if ($mi>7.5){
    $mf=$mi;
    echo "Aprovado sem Prova Final";
    echo "Parabéns!! Boas Férias";
    $aprovadoDireto = true;
}
else{
    $mf=($mi+$pf)/2;
    if (($mf>=5) and ($aprovadoDireto == false)){
        echo "Aprovado com Prova Final";
        echo "Agora já pode descansar tranquilo";
    }
    elseif ($mf<5){
        echo "Reprovado";
        echo "Não foi dessa vez. Ano que vem tem mais TWII.";
        echo "Media Intermediária: ", $mi;
        echo "Media Final: ", $mf;
    }
}
?>
    </body>    
</html>

