<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
    <style>
        img.nota {
            height: 50px;
            margin: 5px;
        }
    </style>
</head>
<body>
    <?php 
        $valor = $_GET['valor'] ?? 0;
        $notas100 = intdiv($valor, 100);
        $resto = $valor % 100;
        $notas50 = intdiv($resto,50);
        $resto = $resto % 50;
        $notas10 = intdiv($resto,10);
        $resto = $resto % 10;
        $notas5 = intdiv($resto,5);

    ?>
    <main>
        <h1>Caixa eletronico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="valor">Qual valor voce deseja sacar? (R$)*</label>
            <input type="number" name="valor" id="valor" step="5" value="<?=$valor?>">
            <p style="font-size: 0.6em;"><sup>*</sup>Notas disponiveis: R$100,R$50,R$10 e R$5</p>
            <input type="submit" value="Sacar">
        </form>
    </main>
    <section id="resultado">
        <?="<h2>Saque de R$" .number_format($valor,2,',','.') . " realizado </h2>" ?>
        <p>O caixa eletronico vai te entregar as seguintes notas: </p>
        <ul>
            <li><p><img src="imagens/100-reais.jpg" alt="nota de 100 reais"  class="nota">  X <?=$notas100?></p></li>
            <li><p><img src="imagens/50-reais.jpg" alt="nota de 50 reais" class="nota">  X <?=$notas50?></p></li>
            <li><p><img src="imagens/10-reais.jpg" alt="nota de 10 reais" class="nota">  X <?=$notas10?></p></li>
            <li><p><img src="imagens/5-reais.jpg" alt="nota de 5 reais" class="nota">  X <?=$notas5?></p></li>
        </ul>
    </section>
</body>
</html>