<html>
<head>
<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>

<div>
    <form action="#" method="POST">
        Número 1: <input type="text" name="num" required>
        Número 2: <input type="text" name="num2" required> <br>
        <input type="radio" name="op" value="S" checked> Somar
        <input type="radio" name="op" value="D"> Diminuir
        <input type="radio" name="op" value="H"> Multiplicar
        <input type="radio" name="op" value="X"> Dividir
        <input type="submit" name="botao" value="Calcular">
    </form>
</div>
<?php
//@serve para desativar o comentário da linha
if (@$_REQUEST['botao']) {
    $valor = @$_POST['num'];
    $valor2 = @$_POST['num2'];
    $operacao = @$_POST['op'];
    
    switch($operacao) {
        case 'S':
            echo "A soma dos valores é: ". ($valor + $valor2);
            break;
        case 'D':
            echo "A diferença dos valores é: ". ($valor - $valor2);
            break;
        case 'H':
            echo "O produto dos valores é: ". ($valor * $valor2);
            break;
        case 'X':
            if ($valor2 != 0) {
                echo "O resultado da divisão dos valores é: ". ($valor / $valor2);
            } else {
                echo "Não é possível dividir por zero.";
            }
            break;
        default:
            echo "Operação inválida.";
    }
}
?>
</body>
</html>
