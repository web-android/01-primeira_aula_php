<?php
/*
Autor: Everaldo Gomes - everaldo.gomes@ifpr.edu.br
Data: 23 de Abril de 2017
Programa: Imprime o conteúdo da variável superglobal $_SERVER:
*/

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset=utf-8 />
  <title>Superglobal - Server</title>
</head>
<body>
  <p><?php echo nl2br(print_r($_SERVER, true));   ?></p>
</body>
</html>
