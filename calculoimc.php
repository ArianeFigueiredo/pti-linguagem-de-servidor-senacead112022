<html>
  <head>
    <title>CÁLCULO IMC</title>
  </head>
  <body>
<?php

    $peso = $_GET['peso'];
    $altura = $_GET['altura'];

function calcula_obesidade($peso, $altura)
{
  $altura = str_replace(',', '.', $altura);
  $result = number_format($peso/($altura**2),2);
  return $result;
}

$massa = calcula_obesidade($peso, $altura);

if ($massa <= 18.50) {
$mensagem = "Magreza";
}
elseif(($massa > 18.50) and ($massa <=24.90)) {
$mensagem = "Normal";
}
elseif(($massa > 24.90) and ($massa <=30.00)) {
$mensagem = "Sobrepeso";
}
elseif(($massa > 29.90) and ($massa <=35.00)) {
$mensagem = "Obesidade Grau I";
}
elseif(($massa > 34.90) and ($massa <=39.90)) {
$mensagem = "Obesidade II";
}
else {
$mensagem = "Obesidade III";
}
echo "Atenção, seu IMC é <b> $massa </b><br>"; 
echo  "e seu índice estado está classificado como: <b> $mensagem</b>";
echo"<p><h3> Resultado do IMC: </h3></p> <b> $massa </b><br>";

?>
  </body>
</html>