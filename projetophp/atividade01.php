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
        <h1>Tabuada</h1>
        <form method="post">
            <input type="text" placeholder="Digite o Número" name="txtv1"><br>
            <input type="submit" value="Mostrar" name="btnmosrar"><br>
        </form>
    </body>
</html>
<?php
$tab = 0;
if (isset($_POST["txtv1"])) {
    $tab = $_POST["txtv1"];
    if (!is_numeric($tab)) {
        echo "<br>O valor informado não é um número.<br>";
    } else {
       tabuada($tab);
    }
}

function tabuada($n){
	$num = 0;
	while ($num <= 10) {
		echo $num . " x " . $n . " = " . ($num * $n) . "<br>";
		$num++;
	}
}

?>