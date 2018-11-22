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
        <h1>Potencia</h1>
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
    echo poten($v1,$v2);
}

function poten($v1, $v2) {
    return pow($v1, $v2);
}
?>