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
        <h1>Analisador de Numero Real</h1>
        <?php 
            $num = $_GET["num"] ?? 0;
            $num_formatado =  number_format($num, 3, ',', '.');
            $inteiro = intval($num);
            echo "<p>Analisando o numero <strong>$num_formatado</strong> informado pelo usuario</p>";
            echo "<ul><li>A parteira do numero e <strong>" . number_format($inteiro,0, ',', '.') . "</strong></li><li>A parte fracionaria do numero e <strong>" . number_format($num - $inteiro,3, ',' , '.') .
            "</strong> </li></ul>";
        ?>
        <p><a href="javascript:history.go(-1)"><button>Voltar</button></a></p>
    </main>
</body>
</html>