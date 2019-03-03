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
           return $s;
            }
           $x=3;
           $y=4;
           $r=soma($x,$y);
           echo "A soma entre $x e $y é igual  a $r";
            
    ?>
</div>
</body>
</html>
 