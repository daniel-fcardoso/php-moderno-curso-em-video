<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $valor = $_GET['valor'] ?? 0;
        $notas100 = intdiv($valor, 100);
        $resto100 = $valor % 100;
        $notas50 = intdiv($resto100,50);
        $resto50 = $resto100 % 50;
        $notas10 = intdiv($resto50,10);
        $resto10 = $resto50 % 10;
        $notas5 = intdiv($resto10,5);

    ?>
    <main>
        <h1>Caixa eletronico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="valor">Qual valor voce deseja sacar? (R$)*</label>
            <input type="number" name="valor" id="valor" step="5" value="<?=$valor?>">
            <p><small>*Notas disponiveis: R$100,R$50,R$10 e R$5</small></p>
            <input type="submit" value="Sacar">
        </form>
    </main>
    <section id="resultado">
        <?="<h2>Saque de R$" .number_format($valor,2,',','.') . " realizado </h2>" ?>
        <p>O caixa eletronico vai te entregar as seguintes notas: </p>
        <ul>
            <li><p><img src="100-reais.jpg" alt="nota de 100 reais">  X <?=$notas100?></p></li>
            <li><p><img src="50-reais.jpg" alt="nota de 50 reais">  X <?=$notas50?></p></li>
            <li><p><img src="10-reais.jpg" alt="nota de 10 reais">  X <?=$notas10?></p></li>
            <li><p><img src="5-reais.jpg" alt="nota de 5 reais">  X <?=$notas5?></p></li>
        </ul>
    </section>
</body>
</html>