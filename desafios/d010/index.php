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
        $anodenascimento = $_GET["anodenascimento"] ?? 2000;
        $anoatual = $_GET["anoatual"] ?? date("y");
        $idade = $anoatual - $anodenascimento;
    ?>
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="anodenascimento">Em que ano voce nasceu?</label>
            <input type="number" name="anodenascimento" id="anodenascimento" value="<?=$anodenascimento?>">
            <label for="anoatual">Quer saber sua idade em que ano? 
            <?php 
                echo "(atualmente estamos em $anoatual)";
            ?>
            </label>
            <input type="number" name="anoatual" id="anoatual" value="<?=$anoatual?>">
            <input type="submit" value="Qual sera minha idade?">
        </form>
    </main>
    <section id="resultado">
        <h2>Resultado</h2>
        <?="Quem nasceu em $anodenascimento vai ter <strong>$idade</strong> em $anoatual!"?>
    </section>
</body>
</html>