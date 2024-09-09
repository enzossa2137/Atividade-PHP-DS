<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação Par ou Ímpar</title>
</head>
<body>

    <form method="POST">
        Digite um número:<br/>
        <input type="number" name="numero" required/><br>
        <input type="submit" value="Verificar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numero = $_POST['numero'];

        if ($numero % 2 == 0) {
            echo "<p>$numero é par</p>";
        } else {
            echo "<p>$numero é ímpar</p>";
        }
    }
    ?>

</body>
</html>
