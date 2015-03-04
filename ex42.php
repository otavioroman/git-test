<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Victor Ferraresi">
        <title>Olar</title>        
    </head>
    <body>
        <?php
        
            echo '<table border="1">
                <tr>
                  <th>ID</th>
                  <th>NOME</th> 
                  <th>DESC</th> 
                </tr>';
            
                    for($i = 0; $i < 7; $i++){
                        echo '<tr>
                        <td>id</td>
                        <td>nome</td>		
                        <td>desc</td>
                        </tr>';
                    }
               echo '</table>';
        ?>

    </body>
</html>

