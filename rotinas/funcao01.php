<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Exemplo função 01 </title>
  <h1> Curso básico de php </h1>
</head>
<body>
<img  src="_css/php-logo.png">
<div>
    <?php
        function soma($a, $b)  {
            $s = $a  + $b;
            echo "<p> A soma dos valores $s</p>";
            }
            soma(3,4);
            soma(8,2);
            $x=9;
            $y=15;
            soma($x,$y);    
    ?>
</div>
</body>
</html>
 