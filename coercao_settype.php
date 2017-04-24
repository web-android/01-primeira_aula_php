<?php
/*

Autor: Everaldo Gomes - everaldo.gomes@ifpr.edu.br
Data: 23 de Abril de 2017
Programa: Exemplifica coerção de tipos com settype

*/

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset=utf-8 />
  <title>Coerção de Tipos</title>
</head>
<body>
  <p><?php $bananas = "10 bananas" ;
           settype($bananas, "integer") ;
           echo $bananas ;   ?></p>
  <p><?php $dia_chuvoso = true ;
           settype($dia_chuvoso, "string") ;
           echo $dia_chuvoso ;   ?></p>
  <p><?php $dias = 31 ;
           settype($dias, "float") ;
           var_dump($dias) ;   ?></p>
</body>
</html>
