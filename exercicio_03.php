<?php
$peso = isset($_POST['peso']) ? floatval($_POST['peso']) : 0;
$altura = isset($_POST['altura']) ? floatval($_POST['altura']) : 0;

$imc = ($altura > 0) ? $peso / ($altura * $altura) : 0;

if ($imc < 18.5) {
    $classificacao = "Abaixo do peso normal";
} elseif ($imc < 25) {
    $classificacao = "Peso normal";
} elseif ($imc < 30) {
    $classificacao = "Excesso de peso";
} elseif ($imc < 35) {
    $classificacao = "Obesidade classe I";
} elseif ($imc < 40) {
    $classificacao = "Obesidade classe II";
} else {
    $classificacao = "Obesidade classe III";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Resultado do IMC</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body class="p-4">
  <div class="container">
    <h2>Resultado do IMC</h2>
    <p><strong>IMC calculado:</strong> <?= number_format($imc, 2, ',', '.') ?></p>
    <p><strong>Classificação:</strong> <?= $classificacao ?></p>
    <a href="Home.html" class="btn btn-secondary mt-3">Voltar</a>
  </div>
</body>
</html>
