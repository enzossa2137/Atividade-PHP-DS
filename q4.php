<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Simples</title>
</head>
<body>

    <form method="POST">
        Digite o primeiro número:<br/>
        <input type="number" name="num1" step="0.1" required/><br>
        Digite o segundo número:<br/>
        <input type="number" name="num2" step="0.1" required/><br>
        Selecione a operação:<br/>
        <select name="operacao">
            <option value="somar">+</option>
            <option value="subtrair">-</option>
            <option value="multiplicar">*</option>
            <option value="dividir">/</option>
        </select><br><br>
        <input type="submit" value="Calcular">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operacao = $_POST['operacao'];
        $resultado = '';

        switch ($operacao) {
            case 'somar':
                $resultado = $num1 + $num2;
                break;
            case 'subtrair':
                $resultado = $num1 - $num2;
                break;
            case 'multiplicar':
                $resultado = $num1 * $num2;
                break;
            case 'dividir':
                if ($num2 != 0) {
                    $resultado = $num1 / $num2;
                } else {
                    $resultado = "Erro: Divisão por zero";
                }
                break;
            default:
                $resultado = "Operação inválida";
        }

        echo "<p>Resultado: $resultado</p>";
    }
    ?>

</body>
</html>
