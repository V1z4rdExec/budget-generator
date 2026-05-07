<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Gerador de Orçamento</title>
</head>
<body>
<form action="processa.php" method="POST">
<div class="container mt-5">
<div class="card p-5">

<div class ="mb-3">
<label for="Nome">Nome</label>
<input type="text" name="Nome" id="Nome" class="form-control">
</div>

<br>
<label for="Produto">Produto</label>
<input type="text" name="Produto" id="Produto" class="form-control">
<br>
<label for="Quantidade">Quantidade</label>
<input type="number" name="Quantidade" id="Quantidade" class="form-control">
<br>
<label for="Valor Unitário">Valor Unitário</label>
<input type="text"name="ValorUnitario" id="ValorUnitario" class="form-control">
<br>
<button class ="btn btn-primary">
    Gerar Orçamento
</button>
</form>
</body>
</html>

