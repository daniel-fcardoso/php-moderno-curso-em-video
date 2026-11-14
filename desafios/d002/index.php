<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <h1>Trabalhando com numeros aleatorios</h1>
        <p>Gerando um numero aleatorio entre 0 e 100..</p>
        <?php 
            $num = rand(0,100);
            echo "O valor gerado foi $num";
        ?>
        <button onclick="window.location.reload()">🔄Gerar Outro</button>
    </section>
</body>
</html>