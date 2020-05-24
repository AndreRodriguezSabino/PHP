<!DOCTYPE html>
<html>
    <head>
        <title>Raiz SQRT</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
       <?php
       $valor=$_GET["v"];
       $rq=sqrt($valor);
       echo "<h1>A raiz quadrada de $valor e igual a: </h1>" . number_format($rq, 2);
       ?>
    </body>
</html>


