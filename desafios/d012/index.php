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
        $total_segundos = $_GET["tempo"] ?? 0;

        $semanas = intdiv($total_segundos, 604800) ;
        $restante_semanas = $total_segundos % 604800;

        $dias = intdiv($restante_semanas, 86400);
        $restante_dias = $restante_semanas % 86400;

        $horas = intdiv($restante_dias,3600);
        $restante_horas = $restante_dias % 3600;

        $minutos = intdiv($restante_horas,60);
        $restante_minutos = $restante_horas % 60;

        $segundos = $restante_minutos % 60;

    ?>  
    <main>
        <h1>Calculadora de Tempo</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="tempo">Qual e o total de segundos?</label>
            <input type="number" name="tempo" id="tempo" value="<?=$total_segundos?>">
            <input type="submit" value="Calcular">
        </form>
    </main>
    <section id="resultado">
        <h2>Totalizando tudo</h2>
        <?= "Analisando o valor que voce digitou, <strong>" .number_format($total_segundos,0,',','.') . " segundos</strong> equivalem a um total de: <ul><li>$semanas semanas</li><li> $dias dias</li><li>$horas horas</li><li> $minutos minutos</li><li> $segundos segundos</li></ul>" ?>
    </section>
</body>
</html>