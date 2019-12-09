<?php function value1() {
    return isset( $_POST["val_1"] ) ? $_POST["val_1"] : "";
}

function value2() {
    return isset( $_POST["val_2"] ) ? $_POST["val_2"] : "";
}?>

<!DOCTYPE html>
<html>
    <body>

        <h2>Calculadora</h2>

        <form action="/yamd/calculadora.php" method="post">
            Valor 1<br>
            <input type="number" name="val_1" value="<?php echo value1("val_1")?>">
            <br>
            Valor 2<br>
            <input type="number" name="val_2" value="<?php echo value2("val_2") ?>">
            <br><br>
            <button type="submit">Calcular</button>
        </form>
        <?php
            if( !empty($_POST) && isset( $_POST["val_1"] ) && isset( $_POST["val_2"] ) ) {
                echo $_POST["val_1"] + $_POST["val_2"];
            }
        ?>
    </body>
</html>