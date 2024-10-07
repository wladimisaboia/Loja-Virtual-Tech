<!DOCTYPE html>
<html>
<head>
    <title>Resultado da Montagem do Desktop</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <div class="container">
        <h1>Resumo da Montagem do Desktop</h1>

        <?php
        $cpu = $_POST["cpu"];
        $memoria = $_POST["memoria"];
        $hdssd = $_POST["hdssd"];
        $so = $_POST["so"];
        $monitor = $_POST["monitor"];
        $nome_cliente = $_POST["nome_cliente"];

        function getValor($item) {
            switch ($item) {
                case "Intel Core i3-1115G4":
                    return 1500.00;
                case "Intel Core i5-1135G7":
                    return 2500.00;
                case "Intel Core i7-1165G7":
                    return 3500.00;
                case "AMD Ryzen 5 5500U":
                    return 2000.00;
                case "4GB DDR4":
                    return 100.00;
                case "8GB DDR4":
                    return 200.00;
                case "16GB DDR4":
                    return 400.00;
                case "32GB DDR4":
                    return 800.00;
                case "256GB SSD":
                    return 300.00;
                case "512GB SSD":
                    return 600.00;
                case "1TB HD":
                    return 400.00;
                case "2TB HD":
                    return 800.00;
                case "Windows 10 Home":
                    return 500.00;
                case "Windows 11 Home":
                    return 600.00;
                case "Monitor 22'' Full HD":
                    return 800.00;
                case "Monitor 24'' Full HD":
                    return 1000.00;
                case "Monitor 27'' Full HD":
                    return 1200.00;
                case "Monitor 32'' 4K":
                    return 2000.00;
                default:
                    return 0.00;
            }
        }

        $valorTotal = getValor($cpu) + getValor($memoria) + getValor($hdssd) + getValor($so) + getValor($monitor);
        ?>

        <div class="info-container">
            <p><strong>Cliente:</strong> <?php echo $nome_cliente; ?></p>
            <p><strong>Itens selecionados:</strong></p>
            <ul class="item-list">
                <li><strong>CPU:</strong> <?php echo $cpu; ?> <span class='price'>(R$ <?php echo number_format(getValor($cpu), 2, ',', '.'); ?>)</span></li>
                <li><strong>Memória:</strong> <?php echo $memoria; ?> <span class='price'>(R$ <?php echo number_format(getValor($memoria), 2, ',', '.'); ?>)</span></li>
                <li><strong>HD/SSD:</strong> <?php echo $hdssd; ?> <span class='price'>(R$ <?php echo number_format(getValor($hdssd), 2, ',', '.'); ?>)</span></li>
                <li><strong>Sistema Operacional:</strong> <?php echo $so; ?> <span class='price'>(R$ <?php echo number_format(getValor($so), 2, ',', '.'); ?>)</span></li>
                <li><strong>Monitor:</strong> <?php echo $monitor; ?> <span class='price'>(R$ <?php echo number_format(getValor($monitor), 2, ',', '.'); ?>)</span></li>
            </ul>
            <h2>Valor total: <span class='total-price'>R$ <?php echo number_format($valorTotal, 2, ',', '.'); ?></span></h2>
        </div>

        <form action="loja.php" method="get" class="btn-container">
            <input type="submit" value="Nova cotação" class="btn">
        </form>
    </div>
</body>
</html>
