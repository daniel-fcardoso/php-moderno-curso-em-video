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
        $salario_minimo = 1380;
        $salario = $_GET['salario'] ?? $salario_minimo;
    ?>
    <main>
        <h1>Informe seu salario</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="salario">Salario(R$)</label>
            <input type="number" name="salario" id="salario" value="<?=$salario?>">
            <?="<p>Considerando o salario minimo de <strong>" . number_format($salario_minimo , 2 , ',', '.') . "</strong><p>"?>
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado Final</h2>
        <?php 
            $salarios = intval($salario / $salario_minimo);
            $resto = $salario % $salario_minimo;
            echo "Quem recebe um salario de R$". number_format($salario, 2 ,' ,' ,'.') . " ganha <strong>$salarios salarios minimos</strong> + R$" . number_format($resto, 2, ",", ".");
        ?>
    </section>
</body>
</html>