<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>exemplo PHP</title>

<style>
    .verde
    {
        background-color:lightgreen;
    }
    .amarelo{
        background-color:lightyellow;
    }
</style>

</head>
<body>
    <?php
    
   

    
   
    
    $nome = $_POST["nome"];
    $valor = $_POST["valor"];
    echo($nome);
    echo("<br> <br>");

    for($x=1; $x<=10; $x++)
    {
        if($x%2 == 0)
        {
            echo("<div class='verde'>");
        }
        else
        {
            echo("<div class='amarelo'>");
        }
      
        
        
        echo($valor*$x);
        echo("</div> <br> <br>");
    }   
    ?>

</body>
</html>