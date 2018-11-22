<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <?php
        // Header
        include_once './menu.php';
    ?>
        <h1>Soma dos Pares</h1>
        <form method="post">
            <input type="text" placeholder="Digite o 1° Número" name="txtv1"><br>
            <input type="text" placeholder="Digite o 2° Número" name="txtv2"><br>
            <input type="submit" value="Mostrar" name="btnmosrar"><br>
        </form>
    </body>
</html>
<?php
if ($_POST) {
    $v1 = $_POST["txtv1"];
    $v2 = $_POST["txtv2"];
        somaPares($v1, $v2);
}

function somaPares($v1, $v2) {

    for ($cont = 0; $v1 <= $v2; $v1++) {
        echo "$v1, ";
        if ($v1 % 2 == 0) {
            $cont += $v1;
        }
    }
    echo"<br><br>Total de valores pares $cont";
}
?>
