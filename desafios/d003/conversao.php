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
            $din = $_GET["din"] ?? 0;
            $dollar = 5.67;
            echo "Seus R$". number_format($din, 2, ',', '.')  ." equivalem a <strong>US$" . number_format($din/$dollar, 2, ',', '.') . "</strong>";
            echo "<p><strong>*Cotacao fixa de R$5,67</strong> informada diretamente no codigo.</p>";
        ?>
        <p><a href="javascript:history.go(-1)"><button>Voltar</button></a></p>
    </section>
</body>
</html>

