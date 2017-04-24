<?php
/*
Autor: Everaldo Gomes - everaldo.gomes@ifpr.edu.br
Data: 23 de Abril de 2017                                                                    
Programa: Demonstra o uso de formulários, utilizando o método GET.
          Recebe uma requisição com o parâmetro "mensagem" e imprime
          o valor recebido
*/                                                                                              
function imprime_mensagem(){ 
  if(! empty($_GET["mensagem"])) {
    echo 'A mensagem recebida foi: <b>' . $_GET["mensagem"] . '</b>';
  }
  else {
    echo "Nenhuma mensagem foi recebida";
  }                                                                               
}
?>                                                                                              
<!DOCTYPE html>
<html>
<head>
  <meta charset=utf-8 />
  <title>Pong</title>
</head>
<body>
  <p><?php imprime_mensagem() ?></p>
</body>
</html>
