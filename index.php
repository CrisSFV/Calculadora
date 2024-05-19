<html>
 <head>
  <title>Calculadora</title>
 </head>
 <body>
 <?php echo '<h2>Calculadora en PHP</h2>'; ?>
 <?php echo '<i>DSM - 31 </i>'."<br> ";?>
 <br>
 </body>
</html>

<?php
require_once 'Calculadora.php';
require_once 'Division.php';

$calculadora = new Calculadora(10, 20);
$calculadora1 = new Divicion(50,5);
// echo "SUMA : " $calculadora->suma();

echo "SUMA: ".$calculadora->sumaPublica()." <br>";
echo "RESTA: ".$calculadora->restaPublica()." <br>";
echo "MULTIPLICACION: ".$calculadora->multiplicacionPublica()." <br>";
echo "DIVISION: ".$calculadora1->divicionPublica()." <br>";
?>
