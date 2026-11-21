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
        $preco = $_GET["produto"] ?? 0;
        $aumento = $_GET["percentual"] ?? 0;
        $total = $preco + (($preco * $aumento)/100);
    ?>
    <main>
        <h1>Reajustador de Precos</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>">
            <label for="produto">Preco do Produto(R$)</label>
            <input type="number" name="produto" id="produto" value="<?=$preco?>">
            <label for="percentual">Qual sera o percentual do reajuste?</label>
            <input type="range" name="percentual" id="percentual" value="<?=$aumento?>" oninput="resultadopercentual.value = this.value">
            <output id="resultadopercentual " for="percentual"><?= "$aumento"?></output>
            <input type="submit" value="Reajustar">
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado do Reajuste</h2>
        <?= "O produto que custava R$" . number_format($preco,2,",",".") . " com <strong>$aumento% de aumento</strong> vai passar a custar <strong>R$" . number_format($total,2,",",".") . "</strong> a partir de agora"?>
    </section>
</body>
</html>