<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de Login</title>
</head>
<body>

    <form method="POST">
        Nome de usuário:<br/>
        <input type="text" name="username" required/><br>
        Senha:<br/>
        <input type="password" name="password" required/><br>
        <input type="submit" value="Login">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username == 'admin' && $password == '1234') {
            echo "<p>Login bem-sucedido</p>";
        } else {
            echo "<p>Login ou senha incorretos</p>";
        }
    }
    ?>

</body>
</html>
