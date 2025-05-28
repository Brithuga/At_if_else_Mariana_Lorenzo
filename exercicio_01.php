<?php
$nota1 = isset($_POST['nota1']) ? floatval($_POST['nota1']) : 0;
$nota2 = isset($_POST['nota2']) ? floatval($_POST['nota2']) : 0;
$nota3 = isset($_POST['nota3']) ? floatval($_POST['nota3']) : 0;

$media = ($nota1 + $nota2 + $nota3) / 3;
$situacao = ($media >= 7) ? "APROVADO" : "REPROVADO";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Resultado</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>
<body class="p-4">
  <div class="container">
    <h2>Resultado</h2>
    <p><strong>Média:</strong> <?= number_format($media, 2, ',', '.') ?></p>
    <p><strong>Situação:</strong> <?= $situacao ?></p>
    <a href="exercicio_01_form.html" class="btn btn-secondary mt-3">Voltar</a>
  </div>
</body>
</html>
