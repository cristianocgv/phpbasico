<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Exemplo básico usando IF - Atividade 01</title>
  <h1> Curso básico de PHP </h1>
</head>
<body>
<img  src="_css/php-logo.png">
<div>
    <?php
       $a = isset($_GET["ano"])?$_GET["ano"]:1900;
       $i = date("Y") - $a;
       echo "Você nasceu em $a e terá $i anos. <br/>";
       if($i >=18) {
           $v = "já pode votar";
           $d = "já pode dirigir";
        } 
        else {
            $v = "não pode votar ";
            $d = "não pode dirigir";
        }
        echo "Com essa idade você $v e também $d";
    ?>
</div>
</body>
</html>
 