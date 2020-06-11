<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora PHP</title>
</head>
<body>
    <h2>Calculadora em PHP</h2>
    <p>Insira os valores e a operação a ser executada:</p>
    <form action="calculadora.php" method="get">
    <input type="number" name="valor1" max="10000" min="-10000">
    <select name="operacao" id="oper">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="/">/</option>
        <option value="*">*</option>
    </select>
    <input type="number" name="valor2" max="10000" min="-10000">
    <input type="submit" value="Calcular">
    </form>
</body>
</html>