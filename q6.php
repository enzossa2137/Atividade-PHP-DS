<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu de Opções</title>
</head>
<body>

    <form method="POST">
        Selecione uma opção:<br/>
        <select name="opcao">
            <option value="1">1 - Ver Saldo</option>
            <option value="2">2 - Depositar</option>
            <option value="3">3 - Sacar</option>
            <option value="4">4 - Sair</option>
        </select><br><br>
        <input type="submit" value="Enviar">
    </form>

    <?php
    session_start();

    if (!isset($_SESSION['saldo'])) {
        $_SESSION['saldo'] = 0;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $opcao = $_POST['opcao'];

        switch ($opcao) {
            case '1':
                echo "<p>Seu saldo é: R$ " . $_SESSION['saldo'] . "</p>";
                break;
            case '2':
                echo '<form method="POST">
                        Valor para depositar:<br/>
                        <input type="number" name="valor" step="0.01" required/><br>
                        <input type="hidden" name="opcao" value="2"/>
                        <input type="submit" value="Depositar">
                      </form>';
                if (isset($_POST['valor'])) {
                    $_SESSION['saldo'] += $_POST['valor'];
                    echo "<p>Depósito realizado com sucesso! Seu novo saldo é: R$ " . $_SESSION['saldo'] . "</p>";
                }
                break;
            case '3':
                echo '<form method="POST">
                        Valor para sacar:<br/>
                        <input type="number" name="valor" step="0.01" required/><br>
                        <input type="hidden" name="opcao" value="3"/>
                        <input type="submit" value="Sacar">
                      </form>';
                if (isset($_POST['valor'])) {
                    if ($_SESSION['saldo'] >= $_POST['valor']) {
                        $_SESSION['saldo'] -= $_POST['valor'];
                        echo "<p>Saque realizado com sucesso! Seu novo saldo é: R$ " . $_SESSION['saldo'] . "</p>";
                    } else {
                        echo "<p>Saldo insuficiente para realizar o saque.</p>";
                    }
                }
                break;
            case '4':
                echo "<p>Você saiu do sistema.</p>";
                session_destroy();
                break;
            default:
                echo "<p>Opção inválida.</p>";
        }
    }
    ?>

</body>
</html>
