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
       include "funcaoexterna.php";
       echo "<h2>Testando novas funções</h2>";
       ola();
       mostravalor(4);
            
    ?>
</div>
</body>
</html>
 