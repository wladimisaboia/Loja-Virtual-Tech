<!DOCTYPE html>
<html>
<head>
    <title>Loja de Tecnologia</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/styleLoja.css">
</head>
<body>
    <div class="container">
        <h1>Escolha o Tipo de Produto</h1>
        <p>Selecione se deseja obter informações sobre Notebook ou Desktop:</p>
        
        <div class="option-card" onclick="location.href='notebook.php'">
            <img src="img/notebook.png" alt="Notebook">
            <h2>Notebook</h2>
            <p>Ideal para mobilidade e trabalho.</p>
        </div>

        <div class="option-card" onclick="location.href='desktop.php'">
            <img src="img/desktop.png" alt="Desktop">
            <h2>Desktop</h2>
            <p>Mais potência e capacidade de expansão.</p>
        </div>
    </div>
</body>
</html>
