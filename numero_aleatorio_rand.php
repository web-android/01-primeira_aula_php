<?php                                                                                           
/*                                                                                              
                                                                                                
Autor: Everaldo Gomes - everaldo.gomes@ifpr.edu.br
Data: 23 de Abril de 2017                                                                    
Programa: Imprime um número aleatório, utilizando a função rand()                               
                                                                                                
*/                                                                                              
                                                                                                
                                                                                                
?>                                                                                              
<!DOCTYPE html>                                                                                 
<html>                                                                                          
<head>                                                                                          
  <meta charset=utf-8 />                                                                        
  <title>Número da Sorte</title>                                                                
</head>                                                                                         
<body>                                                                                          
  <p>Número aleatório: <b><?php echo rand()  ?></b></p>                                                                  
  <p>Número aleatório entre 1 e 100: <b><?php echo rand(1, 100)  ?></b></p>                                                                  
</body>                                                                                         
</html>  
