<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - Exemplo tabuada usando a esturutra For</title>
  
</head>
<body>

<img  src="_css/php-logo.png">
<div>
    <form method="get" action="tabuada.php">
        <select name="num">
            <?php
                for ($c=1; $c<=10; $c++) {
                    echo "<option>$c</option>";
                }
            ?>
        </select>
        <input type="submit" value="Tabuada"/>
    </form>
</div>

</body>
</html>
 