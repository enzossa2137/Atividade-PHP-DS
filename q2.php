<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classificação de Notas</title>
</head>
<body>

    <form method="POST">
        Digite a nota (0 a 10):<br/>
        <input type="number" name="nota" min="0" max="10" step="0.1" required/><br>
        <input type="submit" value="Classificar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nota = $_POST['nota'];
        $classificacao = '';

        switch (true) {
            case ($nota == 10):
                $classificacao = 'A';
                break;
            case ($nota == 9):
                $classificacao = 'B';
                break;
            case ($nota >= 7 && $nota <= 8):
                $classificacao = 'C';
                break;
            case ($nota >= 5 && $nota <= 6):
                $classificacao = 'D';
                break;
            case ($nota >= 0 && $nota <= 4):
                $classificacao = 'F';
                break;
            default:
                $classificacao = 'Nota inválida';
        }

        echo "<p>A classificação da nota $nota é: $classificacao</p>";
    }
    ?>

</body>
</html>
