<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado Final</h1>
        <?php 
            $num = $_GET["num"] ?? 0;
            echo "O numero escolhido foi <strong>$num</strong><br>";
            echo "O seu <em>antecessor</em> e " . $num - 1 . "<br>";
            echo "O seu <em>sucessor</em> e " .$num + 1 . "<br>"; 
        ?>
        <button onclick="javascript:history.go(-1)">&#x2B05;Voltar</button>
    </main>
</body>
</html>