<?php
/*

Autor: Everaldo Gomes - everaldo.gomes@ifpr.edu.br
Data: 23 de Abril de 2017                                                                      
Programa: Demonstra o uso de formulários, utilizando o método POST.
          Envia uma requisição para a mesma página, que por sua vez
          imprime o valor escolhido, quando estiver processando uma
          requisição
*/                                                                                              
function imprime_curso_escolhido(){
  $nomes_cursos = [ "bsi" => "Bacharelado em Sistemas de Informação",
                    "bcc" => "Bacharelado em Ciência da Computação",
                    "tjd" => "Tecnologia em Jogos Digitais" ];

  if(! empty($_POST["curso"])){
    $nome_curso = $nomes_cursos[$_POST["curso"]];
    echo <<<EOT
      <h1>
        O curso escolhido foi $nome_curso
      </h1>
EOT;
  }
}
?>                                                                                              
<!DOCTYPE html>
<html>
<head>
  <meta charset=utf-8 />
  <title>Formulário Select Box - Selecione um Curso</title>
</head>
<body>
  <h1>Selecione seu curso:</h1>
  <form action="" method="POST">
    <p>
      <label for="curso">Curso:</label>
      <select name="curso" id="curso" value="abacaxi">
        <option value>Selecione um curso</option>
        <option value="bsi">Bacharelado em Sistemas de Informação</option>
        <option value="bcc">Bacharelado em Ciência da Computação</option>
        <option value="tjd">Tecnologia em Jogos Digitais</option>
      </select>
    </p>
    <input type="submit" value="Enviar">
  </form>

  <?php imprime_curso_escolhido() ?>
</body>
</html>  
