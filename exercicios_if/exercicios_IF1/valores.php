<!DOCTYPE html>
<html lang="pt-br">
<?php
    $valor = filter_input(INPUT_POST, 'valor_operacao');

    if($valor > 0){
        $valor = ('Valor Positivo');
    }
    elseif ($valor < 0){
        $valor = ('Valor Negativo');
    }
    else{
        $valor =('Igual a zero');
    }



?>
<head>
    <meta charset="UTF-8">
    <title>Exercicio Valores</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrapper">
       <form class="form-wrapper" method="post">
            <label>
                 Digite um número : <input type="text" name="valor_operacao">
            </label>
        </form>
            <h1 class="valor">
                <?=$valor?>
            </h1>
    </div>
</body>
</html>