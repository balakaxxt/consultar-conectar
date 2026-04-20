<?php
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    die("Acesso inválido.");
}

$ambiente = $_POST["ambiente"] ?? "";

$stmt = $pdo->prepare("SELECT nome, equipamento, descricao FROM ambientes WHERE codigo = :codigo LIMIT 1");
$stmt->bindParam(":codigo", $ambiente);
$stmt->execute();
$res = $stmt->fetch(PDO::FETCH_ASSOC);

$imgs = [
"residencial"=>"https://sohoplus.com.br/cdn/shop/files/ROTEADORN300.78.png?v=1744736796&width=1445",
"pequeno_escritorio"=>"https://cdn.shoppub.io/cdn-cgi/image/w=1000,h=1000,q=80,f=auto/oficinadosbits/media/uploads/produtos/foto/xuzwslgt/file.png",
"data_center"=>"https://img.olx.com.br/images/67/675593521451513.webp"
];

$img = $imgs[$ambiente] ?? "";
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<title>Resultado</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="assets/style.css">
</head>

<body>

<div class="topbar">Portal de Serviços</div>
<div class="header text-center">Resultado da Recomendação</div>

<div class="container mt-5 d-flex justify-content-center">
<div class="card card-custom p-4" style="width:500px;">

<?php if($res): ?>

<h3 class="text-center"><?php echo htmlspecialchars($res['nome']); ?></h3>

<img src="<?php echo $img; ?>" class="img-fluid mb-3">

<p><strong>Equipamento:</strong> <?php echo htmlspecialchars($res['equipamento']); ?></p>
<p><?php echo htmlspecialchars($res['descricao']); ?></p>

<?php else: ?>

<p class="text-danger">Ambiente não reconhecido.</p>

<?php endif; ?>

<a href="index.php" class="btn btn-primary mt-3">Voltar</a>

</div>
</div>

</body>
</html>
