<?php
/*

Autor: Everaldo Gomes - everaldo.gomes@ifpr.edu.br
Data: 23 de Abril de 2017                                                                     
Programa: Demonstra o uso de formulários, utilizando o método POST.
          Envia uma requisição para a mesma página, que por sua vez
          imprime o valor escolhido, quando estiver processando uma
          requisição
*/                                                                                              
function imprime_cor_escolhida(){
  $cores = [ "blue" => "Azul", "green" => "Verde", "yellow" => "Amarelo",
             "red" => "Vermelho"  ];

  if(! empty($_POST["cor"])){
    $nome_cor = $cores[$_POST["cor"]];
    echo <<<EOT
      <h1 style="color: {$_POST['cor']}">
        Sua cor favorita é $nome_cor
      </h1>
EOT;
  }
}
?>                                                                                              
<!DOCTYPE html>
<html>
<head>
  <meta charset=utf-8 />
  <title>Formulário Radio Buttons</title>
</head>
<body>
  <h1>Escolha sua cor favorita</h1>
  <form action="" method="POST">
    <p>
      <input type="radio" name="cor" id="cor_azul" value="blue">
      <label for="cor_azul">Azul</label>
    </p>
    <p>
      <input type="radio" name="cor" id="cor_amarela" value="yellow">
      <label for="cor_amarela">Amarelo</label>
    </p>
    <p>
      <input type="radio" name="cor" id="cor_verde" value="green">
      <label for="cor_verde">Verde</label>
    </p>
    <p>
      <input type="radio" name="cor" id="cor_vermelha" value="red">
      <label for="cor_vermelha">Vermelho</label>
    </p>
    <input type="submit" value="Escolher">
  </form>

  <?php imprime_cor_escolhida() ?>
</body>
</html>  
