
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
        <h1>Calculo</h1>
        <form method="post">
            <select name="calcular">
                <option> Circulo </option>
                <option> Quadrado </option>
            </select><br>
            <input type="text" placeholder="Digite o lado de um quadrado" name="quadrado"><br>
            <input type="text" placeholder="Digite o raio de um circulo" name="circulo"><br>
            <input type="submit" value="Mostrar" name="btnmosrar"><br>
        </form>
    </body>
</html>
<?php
if ($_POST) {
    $quad = $_POST["quadrado"];
    $cir = $_POST["circulo"];
    $select = $_POST["calcular"];
    if ($select == "Circulo"){
        $ci = (3.14 * 2) * $cir;
        echo $ci;
    } else {
        $quadrado = $quad*$quad;
        echo "A = $quadrado cm²";
    }
}
?>