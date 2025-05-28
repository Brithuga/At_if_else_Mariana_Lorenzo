<?php
$temperatura = isset($_GET['temperatura']) ? floatval($_GET['temperatura']) : null;

if ($temperatura === null) {
  $mensagem = "Temperatura inválida!";
} elseif ($temperatura < 0) {
  $mensagem = "Congelante";
} elseif ($temperatura >= 0 && $temperatura < 15) {
  $mensagem = "Muito frio";
} elseif ($temperatura >= 15 && $temperatura < 25) {
  $mensagem = "Razoável";
} else {
  $mensagem = "Calor";
}
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
    <h2>Resultado da Temperatura</h2>
    <p><strong>Temperatura informada:</strong> <?= htmlspecialchars($temperatura) ?> °C</p>
    <p><strong>Classificação:</strong> <?= $mensagem ?></p>
    <a href="Home.html" class="btn btn-secondary mt-3">Voltar</a>
  </div>
</body>
</html>
