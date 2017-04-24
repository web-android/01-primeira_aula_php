<?php
/*

Autor: Everaldo Gomes - everaldo.gomes@ifpr.edu.br
Data: 23 de Abril de 2017
Programa: Exemplifica destruição de variáveis 

*/

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset=utf-8 />
  <title>Destruição de Variáveis</title>
</head>
<body>
  <p><?php $sentido_da_vida = 42 ; 
           // Guia do Mochileiro das Galáxias :-)
           var_dump($sentido_da_vida) ; ?>
  </p>
  <p><?php
           unset($sentido_da_vida);
           var_dump($sentido_da_vida) ;
     ?>
  </p>
</body>
</html>
