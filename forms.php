<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Orçamento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<?php
$nome = $_POST["Nome"];
$produto = $_POST["Produto"];
$quantidade = $_POST["Quantidade"];
$valorunitario = str_replace(',', '.', $_POST["ValorUnitario"]);
$total = $quantidade * $valorunitario;
?>

<div class="container mt-5">

<div class="card p-5 shadow">

<h1 class="text-center mb-4">
     Resultado do Orçamento
</h1>
 <p>
    <strong>Cliente:</strong>
    <?= $nome ?>
</p>
<p>
    <strong>Produto:</strong>
    <?= $produto ?>
</p>
<p>
    <strong>Quantidade:</strong>
    <?= $quantidade ?>
</p>
<p>
    <strong>Preço Unitário:</strong>
     R$ <?= number_format($valorunitario, 2, ',', '.') ?>
</p>
    <div class="alert alert-success mt-4">
    <h4>
        Total: R$
        <?= number_format($total, 2, ',', '.') ?>
    </h4>
    </div>
    <a href="index.php" class="btn btn-secondary w-100">
     Voltar
        </a>
    </div>
</div>
</body>
</html>