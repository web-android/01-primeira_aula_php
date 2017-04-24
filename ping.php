<?php                                                                                           
/*                                                                                              
                                                                                                
Autor: Everaldo Gomes - everaldo.gomes@ifpr.edu.br
Data: 23 de Abril de 2017                                                                     
Programa: Demonstra o uso de formulários, utilizando o método GET.
          Envia uma requisição para a página pong.php, que por sua vez
          apenas imprime o valor enviado
                                                                                                
*/                                                                                              
                                                                                                
                                                                                                
?>                                                                                              
<!DOCTYPE html>                                                                                 
<html>                                                                                          
<head>                                                                                          
  <meta charset=utf-8 />                                                                        
  <title>Ping</title>                                                                
</head>                                                                                         
<body>                                                                                          
  <form action="pong.php" method="GET">
    <input type="text" name="mensagem" id="mensagem" placeholder="Digite uma mensagem">
  </form>
</body>                                                                                         
</html>  
