<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Sequência de Fibonacci</title>
</head>
<body>
    <h2>Sequência de Fibonacci até o número informado</h2>

    <form method="POST" action="">
        <label for="numero">Digite um número:</label>
        <input type="number" id="numero" name="numero" min="0" required>
        <button type="submit" name="gerar">Gerar Sequência</button>
    </form>

    <?php
    if (isset($_POST['gerar'])) {
        $limite = intval($_POST['numero']);

        $fibonacci = [0, 1]; 


        while (true) {
            $proximo = $fibonacci[count($fibonacci) - 1] + $fibonacci[count($fibonacci) - 2];
            if ($proximo > $limite) break;
            $fibonacci[] = $proximo;
        }


        echo "<p>Sequência de Fibonacci até <strong>$limite</strong>:</p>";
        echo "<p>" . implode(" - ", $fibonacci) . "</p>";
    }
    ?>
</body>
</html>