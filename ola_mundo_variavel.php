<?php
/*

Autor: Everaldo Gomes - everaldo.gomes@ifpr.edu.br
Data: 23 de Abril de 2017
Programa: Olá Mundo em PHP, utilizando variáveis

*/


$ola = 'Olá Mundo!' ;

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset=utf-8 />
  <title><?php echo "$ola" ?></title>
</head>
<body>
  <p><?php echo "$ola"  ?></p>
  <p>Para imprimir uma variável, é necessário utilizar aspas duplas na String, senão a interpolação (substituição) não é realizada.</p>
  <p><?php echo '$ola' ?></p>

</body>
</html>
