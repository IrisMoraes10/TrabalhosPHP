<html>
    <head>
        <meta charset="UTF-8">
        <title>Armazena Cookies</title>
    </head>
    <body>
    <?php
        // Header
        include_once './menu.php';
    ?>
    <?php
    if (isset($_POST['usuario'])) {
        $user = $_POST['usuario'];
        $rm = $_POST['rm'];
        $curso = $_POST['curso'];
        setcookie("usuario",$user);
        setcookie("rm",$rm);
        setcookie("curso",$curso);
        
        $mensagem = "Usuario $user, com o RM $rm, do curso $curso conectado.<p>";
    }else {
        $mensagem = "Digite o seu nome de usuario";
    }
    ?>
        <?php
        echo $mensagem;
        ?>
        <form method="post" action="./atividade10.php">
            Nome do usuário: <input type="text" name="usuario">
            RM: <input type="text" name="rm">
            Curso: <input type="text" name="curso">
            <br>
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>
