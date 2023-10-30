<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversão</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1> Seu Dinheiro Convertido </h1>
        <?php 
            //Cotação retirada do google hoje
            $cotação = 4.99;

            // Quantos $$ você tem? 
            $real = $_REQUEST ["din"] ?? 0;

            // Equivalência do dólar

            $dolar = $real / $cotação;

            $padrão = numfmt_create ("pt_BR", NumberFormatter::CURRENCY);

            echo "Seus " . numfmt_format_currency($padrão, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrão, $dolar, "USD") . "</p>";

        ?>
        <button onclick="history.go(-1)">Voltar para a página anterior</button>
    </main>
</body>
</html>