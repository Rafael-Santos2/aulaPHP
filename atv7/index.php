<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de Comida</title>
</head>

<body>
    <form method="post">
        <label>
            <p>Escolha entre 1 e 3</p>
        </label>
        <select name="selecao">
            <option value="1">Refrigerante</option>
            <option value="2">Salgadinho</option>
            <option value="3">Suco</option>
        </select>
        <button type="submit">Selecionar</button>
    </form>

    <?php
    if (isset($_POST['selecao'])) {
        $selecao = $_POST['selecao'];
        $nomebebida = "";
        $preco = "";

        switch ($selecao) {
            case 1:
                $nomebebida = "Refrigerante";
                $preco = 4.99;
                break;
            case 2:
                $nomebebida = "Salgadinho";
                $preco = 3.99;
                break;
            case 3:
                $nomebebida = "Suco";
                $preco = 5.99;
                break;
            default:
                $nomebebida = "Item inválido";
                $preco = "R$ 0,00";
                exit;
        }

        echo "<p>Você escolheu: $nomebebida</p>";
        echo "Preço R$ " . number_format($preco, 2, ',', '.');
    }
    ?>
</body>

</html>