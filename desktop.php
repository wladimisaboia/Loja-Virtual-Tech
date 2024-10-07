<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: login.php"); 
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Monte seu Desktop</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <div class="container">
        <h1>Monte seu Desktop</h1>
        <p>Selecione as opções abaixo para configurar o seu desktop personalizado:</p>
        
        <form action="montarDesktop.php" method="post">
            <h2>CPU:</h2>
            <ul>
                <li>
                    <input type="radio" name="cpu" value="Intel Core i3-1115G4">
                    <label>Intel Core i3-1115G4 (R$ 1.500,00)</label>
                </li>
                <li>
                    <input type="radio" name="cpu" value="Intel Core i5-1135G7">
                    <label>Intel Core i5-1135G7 (R$ 2.500,00)</label>
                </li>
                <li>
                    <input type="radio" name="cpu" value="Intel Core i7-1165G7">
                    <label>Intel Core i7-1165G7 (R$ 3.500,00)</label>
                </li>
                <li>
                    <input type="radio" name="cpu" value="AMD Ryzen 5 5500U">
                    <label>AMD Ryzen 5 5500U (R$ 2.000,00)</label>
                </li>
            </ul>
            
            <h2>Memória:</h2>
            <ul>
                <li>
                    <input type="radio" name="memoria" value="4GB DDR4">
                    <label>4GB DDR4 (R$ 100,00)</label>
                </li>
                <li>
                    <input type="radio" name="memoria" value="8GB DDR4">
                    <label>8GB DDR4 (R$ 200,00)</label>
                </li>
                <li>
                    <input type="radio" name="memoria" value="16GB DDR4">
                    <label>16GB DDR4 (R$ 400,00)</label>
                </li>
                <li>
                    <input type="radio" name="memoria" value="32GB DDR4">
                    <label>32GB DDR4 (R$ 800,00)</label>
                </li>
            </ul>

            <h2>HD/SSD:</h2>
            <ul>
                <li>
                    <input type="radio" name="hdssd" value="256GB SSD">
                    <label>256GB SSD (R$ 300,00)</label>
                </li>
                <li>
                    <input type="radio" name="hdssd" value="512GB SSD">
                    <label>512GB SSD (R$ 600,00)</label>
                </li>
                <li>
                    <input type="radio" name="hdssd" value="1TB HD">
                    <label>1TB HD (R$ 400,00)</label>
                </li>
                <li>
                    <input type="radio" name="hdssd" value="2TB HD">
                    <label>2TB HD (R$ 800,00)</label>
                </li>
            </ul>

            <h2>Sistema Operacional:</h2>
            <ul>
                <li>
                    <input type="radio" name="so" value="Windows 10 Home">
                    <label>Windows 10 Home (R$ 500,00)</label>
                </li>
                <li>
                    <input type="radio" name="so" value="Windows 11 Home">
                    <label>Windows 11 Home (R$ 600,00)</label>
                </li>
            </ul>

            <h2>Monitor:</h2>
            <ul>
                <li>
                    <input type="radio" name="monitor" value="Monitor 22'' Full HD">
                    <label>Monitor 22'' Full HD (R$ 800,00)</label>
                </li>
                <li>
                    <input type="radio" name="monitor" value="Monitor 24'' Full HD">
                    <label>Monitor 24'' Full HD (R$ 1.000,00)</label>
                </li>
                <li>
                    <input type="radio" name="monitor" value="Monitor 27'' Full HD">
                    <label>Monitor 27'' Full HD (R$ 1.200,00)</label>
                </li>
                <li>
                    <input type="radio" name=" monitor" value="Monitor 32'' 4K">
                    <label>Monitor 32'' 4K (R$ 2.000,00)</label>
                </li>
            </ul>

            <h2>Nome do Cliente:</h2>
            <input type="text" name="nome_cliente" placeholder="Digite seu nome completo">
            
            <input type="submit" value="Montar Desktop">
        </form>
    </div>
</body>
</html>
