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
        $valor1 = $_GET['primeirovalor'] ?? 0;
        $valor2 = $_GET['segundovalor']?? 0;
        $peso1 = $_GET['primeiropeso'] ?? 1;
        $peso2 = $_GET['segundopeso'] ?? 1;
        $mediasimples = ($valor1 + $valor2)/2;
        $somapesos = ($peso1 + $peso2);
        $mediaponderada = (($valor1 * $peso1) + ($valor2 * $peso2))/ $somapesos;
    ?>
    <main>
        <h2>Medias Aritmeticas</h2>
        <form action="?>=$_SERVER['PHP_SELF']?>" method="get">
            <label for="primeirovalor">1 Valor</label>
            <input type="number" name="primeirovalor" id="primeirovalor" value="<?=$valor1?>">
            <label for="primeiropeso">1 Peso</label>
            <input type="number" name="primeiropeso" id="primeiropeso" value="<?=$peso1?>">
            <label for="primeirovalor">2 Valor</label>
            <input type="number" name="segundovalor" id="segundovalor" value="<?=$valor2?>">
            <label for="primeiropeso">2 Peso</label>
            <input type="number" name="segundopeso" id="segundopeso" value="<?=$peso2?>">
            <input type="submit" value="Calcular Medias">
        </form>
    </main>

    <section id="resultado">
        <h2>Calculo das Medias</h2>
        <?php 
            echo "<p>Analisando os valores $valor1 e $valor2</p>";
            echo "<ul><li>A <strong>Media Aritmetica Simples</strong> entre os valores e igual a " . number_format($mediasimples,2,",") . ".</li><li>A <strong>Media Aritmetica Ponderada</strong> com pesos $peso1 e $peso2 e igual a " . number_format($mediaponderada,2,','). ".</li></ul>";
        ?>
    </section>
</body>
</html>