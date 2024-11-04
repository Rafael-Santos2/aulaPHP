<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sortear dia</title>
</head>

<body>

    <form method="post">
        <button type="submit" name="sortear">Sortear Dia</button>
    </form>

    <?php

    if (isset($_POST['sortear'])) {

        $dia = rand(1,7);

        switch ($dia) {
            case 1:
                echo '<p>Domingo<p>';
                break;
            case 2:
                echo '<p>Segunda-Feira<p>';
                break;
            case 3:
                echo '<p>Terça-Feira<p>';
                break;
            case 4:
                echo '<p>Quarta-Feira<p>';
                break;
            case 5:
                echo '<p>Quinta-Feira<p>';
                break;
            case 6:
                echo '<p>Sexta-Feira<p>';
                break;
            case 7:
                echo '<p>Sábado<p>';
        }
    }
    ?>
</body>

</html>