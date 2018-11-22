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
         <h1>Vetor</h1>
        <form method="post">
            <input type="text" placeholder="Digite o 1° Número" name="txtv1"><br>
            <input type="text" placeholder="Digite o 2° Número" name="txtv2"><br>
            <input type="text" placeholder="Digite o 3° Número" name="txtv3"><br>
            <input type="text" placeholder="Digite o 4° Número" name="txtv4"><br>
            <input type="text" placeholder="Digite o 5° Número" name="txtv5"><br>
            <input type="text" placeholder="Digite o 6° Número" name="txtv6"><br>
            <input type="text" placeholder="Digite o 7° Número" name="txtv7"><br>
            <input type="text" placeholder="Digite o 8° Número" name="txtv8"><br>
            <input type="text" placeholder="Digite o 9° Número" name="txtv9"><br>
            <input type="text" placeholder="Digite o 10° Número" name="txtv10"><br>
            <input type="submit" value="Mostrar" name="btnmosrar"><br>
        </form>
        <div class="container">
            <?php
        if ($_POST) {
                $vet[0] = $_POST["txtv1"];
                $vet[1] = $_POST["txtv2"];
                $vet[2] = $_POST["txtv3"];
                $vet[3] = $_POST["txtv4"];
                $vet[4] = $_POST["txtv5"];
                $vet[5] = $_POST["txtv6"];
                $vet[6] = $_POST["txtv7"];
                $vet[7] = $_POST["txtv8"];
                $vet[8] = $_POST["txtv9"];
                $vet[9] = $_POST["txtv10"];
                
                $soma = 0;
                
                for ($i=0; $i < 10; $i++) { 
                    echo $vet[$i] . "<br>";
                    $soma += $vet[$i];
                }

            echo "soma total de $soma";
            }
            ?>
        </div>
    </body>
</html>
