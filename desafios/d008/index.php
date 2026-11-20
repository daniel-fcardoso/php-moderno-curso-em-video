<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $numero = $_GET['num'] ?? 1;
        $raizquadrada = sqrt($numero);
        $raizcubica = pow($numero, 1/3);
    ?>
    <main>
        <h1>Informe um numero</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="num">Numero</label>
            <input type="number" name="num" id="num" value="<?=$numero?>">
            <input type="submit" value="Calcular Raizes">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado final</h2>
        <?php 
            echo "<p>Analisando o <strong>Numero $numero</strong>, temos:</p>";
            echo "<ul><li>A sua raiz quadrada e <strong>". number_format($raizquadrada, 3) . "</strong></li><li>A sua raiz cubica e <strong>" .number_format($raizcubica, 3) ."</strong></li></ul>";
        ?>
    </section>
</body>
</html>