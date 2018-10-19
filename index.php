<!DOCTYPE html>
<html lang="es" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Calculadora poyua</title>
    </head>
    <body>
        <?php
        $ope1 = isset($_GET['ope1']) ? trim($_GET['ope1']) : '0';
        $ope2 = isset($_GET['ope2']) ? trim($_GET['ope2']) : '0';
        $ope3 = isset($_GET['ope3']) ? trim($_GET['ope3']) : '+';
        ?>

        <form action="" method="get">
            <label for="ope1">Primer operando:</label>
            <input id="ope1" type="text" name="ope1" value="<?= $ope1 ?>"><br>
            <label for="ope2">Segundo Operando:</label>
            <input id="ope2" type="text" name="ope2" value="<?= $ope2 ?>"><br>
            <label for="ope3">Operación:</label>
            <input id="ope3" type="text" name="ope3" value="<?= $ope3 ?>"><br>
            <input type="submit" value="Calcular">
        </form>
        <?php
        switch ($ope3) {
            case '+':
                $resultado=$ope1+$ope2;
                break;

            default:
                // code...
                break;
        }
        ?>
            <h3>El resultado es: <?= $resultado ?></h3>

    </body>
</html>
