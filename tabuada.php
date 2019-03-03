<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Exercicio Tabuada usando a função -> For</title>
</head>
<body>
<img  src="_css/php-logo.png">
<div>
    <?php
       $n = isset($_GET["num"])?$_GET["num"]:1; 
       for ($c=1; $c<=10; $c++) {
           $r = $n * $c;
           echo "$n x $c = $r <br/>";
       }
    ?>
    <br/><a href="javascript:history.go(-1)">Voltar</a>
</div>

</body>
</html>
 

