<?php
    $num = filter_input(INPUT_POST, 'numero_escolhido');

    if($num > 0 ){
        $valor_1 = $num;
        for ($i =($valor_1 - 1);$i > 0; $i--){
            $valor_1 = $valor_1 * $i;
        }
    }
    else{
        $valor_1=0;
    }



?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercicio 2</title>
</head>
<body>
    <form method="post">
        <label>
            Digite um número: <input type="text" name="numero_escolhido">
        </label>
    </form>
        <p><?=$valor_1?></p>
</body>
</html>