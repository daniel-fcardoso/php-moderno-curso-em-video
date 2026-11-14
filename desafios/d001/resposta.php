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
        <h1>Resultado Final</h1>
        <?php 
            $num = $_GET["num"] ?? 0;
            echo "O numero escolhido foi <strong>$num</strong><br>";
            echo "O seu antecessor e " . $num - 1 . "<br>";
            echo "O seu sucessor e " .$num + 1 . "<br>"; 
        ?>
        <p><a href="javascript:history.go(-1)"><button>&larr;Voltar</button></a></p>
    </section>
</body>
</html>