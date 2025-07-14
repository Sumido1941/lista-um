<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Soma entre dois números</title>
</head>
<body>
    <h2>Soma dos números entre dois valores</h2>
    
    <form method="POST" action="">
        <label for="numero1">Digite o primeiro número:</label>
        <input type="number" id="numero1" name="numero1" required><br><br>

        <label for="numero2">Digite o segundo número:</label>
        <input type="number" id="numero2" name="numero2" required><br><br>

        <button type="submit" name="somar">Calcular Soma</button>
    </form>

    <?php
    if (isset($_POST['somar'])) {
        $num1 = intval($_POST['numero1']);
        $num2 = intval($_POST['numero2']);

        $inicio = min($num1, $num2);
        $fim = max($num1, $num2);

        $soma = 0;
        for ($i = $inicio; $i <= $fim; $i++) {
            $soma += $i;
        }

        echo "<p>A soma de todos os números entre <strong>$inicio</strong> e <strong>$fim</strong> é <strong>$soma</strong>.</p>";
    }
    ?>
</body>
</html>