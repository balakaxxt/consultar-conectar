<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>ConectaJá</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="assets/style.css">
</head>
<body>

<div class="topbar">Portal de Serviços - ConectaJá</div>
<div class="header text-center">ConectaJá Consultoria</div>

<div class="container mt-5 d-flex justify-content-center">
<div class="card card-custom p-4" style="width:420px;">

<h4 class="text-center">Recomendador de Rede</h4>

<form action="recomenda_equipamento.php" method="POST">
<select name="ambiente" class="form-select mb-3" required>
<option value="">-- Escolha --</option>
<option value="residencial">Residencial</option>
<option value="pequeno_escritorio">Pequeno Escritório</option>
<option value="data_center">Data Center</option>
</select>

<button class="btn btn-gov w-100">Ver Recomendação</button>
</form>

</div>
</div>

</body>
</html>
