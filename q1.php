<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de Idade para Cadastro</title>
</head>
<body>

    <form method="POST">
        Digite sua idade:<br/>
        <input type="number" name="idade" min="0" required/><br>
        <input type="submit" value="Verificar">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $idade = $_POST['idade'];

        if ($idade >= 18) {
            echo "<p>Cadastro permitido. Bem-vindo!</p>";
        } else {
            echo "<p>Você não pode se cadastrar. Idade mínima é 18 anos.</p>";
        }
    }
    ?>

</body>
</html>
