<?php                                                                                           
/*
Autor: Everaldo Gomes - everaldo.gomes@ifpr.edu.br
Data: 23 de Abril de 2017
Programa: Demonstra o uso da superglobal $_REQUEST,
          que armazena informações de requisições GET, POST e
          também cookies
*/

function imprime_mensagem(){
  if(! empty($_REQUEST["mensagem"])){
    echo <<<EOT
    <h1>A mensagem enviada foi  {$_REQUEST["mensagem"]} via
    método {$_SERVER["REQUEST_METHOD"]}
    </h1>
EOT;
  }


}


?>                                                                                              
<!DOCTYPE html>
<html>
<head>
  <meta charset=utf-8 />                                                                        
  <title>Superglobal Request</title>
</head>
<body>
  <form name="get_form" action="" method="GET">
    <label for="mensagem_get">GET</label>
    <input type="text" name="mensagem" id="mensagem_get" placeholder="Digite uma mensagem">
  </form>
  <form name="post_form" action="" method="POST">
    <label for="mensagem_post">POST</label>
    <input type="text" name="mensagem" id="mensagem_post" placeholder="Digite uma mensagem">
  </form>
  <p><?php imprime_mensagem() ?>
</body>                                                                                         
</html>  
