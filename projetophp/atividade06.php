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
        <h1>Equaçao de Segundo Grau</h1>
        <form method="post">
            <input type="text" placeholder="Digite o valor de A" name="txtv1"><br>
            <input type="text" placeholder="Digite o valor de B" name="txtv2"><br>
            <input type="text" placeholder="Digite o valor de C" name="txtv3"><br>
            <input type="submit" value="Mostrar" name="btnmosrar"><br>
        </form>
        <div class="container">
        <?php
        if ($_POST) {
            $a = $_POST["txtv1"];
            $b = $_POST["txtv2"];
            $c = $_POST["txtv3"];
            $d = delta($a, $b, $c);
            if ($d > 0){
                $x = (-$b + sqrt($d)) / (2*$a);
                $x2 = (-$b - sqrt($d)) / (2*$a);
                echo "x' = " . $x . "<br>";
                echo "x'' = " . $x2;
            } else if ( $d == 0 ) {
                echo "Só possui uma raiz real";
            } else {
                echo "Não possui nenhuma raiz real";
            }
        }

        function delta($a, $b, $c) {
            return ($b * $b) - 4 * $a * $c;
        }
      
        ?>
        </div>
    </body>
</html>
