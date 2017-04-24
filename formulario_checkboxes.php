<?php
/*

Autor: Everaldo Gomes - everaldo.gomes@ifpr.edu.br
Data: 23 de Abril de 2017                                                                      
Programa: Demonstra o uso de formulários, utilizando o método POST.
          Envia uma requisição para a mesma página, que por sua vez
          imprime o valor escolhido, quando estiver processando uma
          requisição
*/                                                                                              
function imprime_frutas_escolhidas(){
  $nomes_frutas = [ "abacaxi" => "Abacaxi", "laranja" => "Laranja", "maca" => "Maçã",
             "uva" => "Uva"  ];

  if(! empty($_POST["frutas"])){
    $frutas = [];
    foreach($_POST["frutas"] as $fruta){
      $frutas[] = $nomes_frutas[$fruta];
    }
    $frutas = implode(", ", $frutas);
    echo <<<EOT
      <h1>
        As frutas escolhidas foram $frutas
      </h1>
EOT;
  }
}
?>                                                                                              
<!DOCTYPE html>
<html>
<head>
  <meta charset=utf-8 />
  <title>Formulário Checkboxes Buttons</title>
</head>
<body>
  <h1>Escolha suas frutas favoritas</h1>
  <form action="" method="POST">
    <p>
      <input type="checkbox" name="frutas[]" id="fruta_abacaxi" value="abacaxi">
      <label for="fruta_abacaxi">Abacaxi</label>
    </p>
    <p>
      <input type="checkbox" name="frutas[]" id="fruta_laranja" value="laranja">
      <label for="fruta_laranja">Laranja</label>
    </p>
    <p>
      <input type="checkbox" name="frutas[]" id="fruta_maca" value="maca">
      <label for="fruta_maca">Maçã</label>
    </p>
    <p>
      <input type="checkbox" name="frutas[]" id="fruta_uva" value="uva">
      <label for="fruta_uva">Uva</label>
    </p>
    <input type="submit" value="Escolher">
  </form>

  <?php imprime_frutas_escolhidas() ?>
</body>
</html>  
