<?php

    /*$sql = "SELECT id, firstname, lastname FROM MyGuests";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {*/

    session_start();

    if (isset($_SESSION["user"]) && $_SESSION["user"] > 0) {
        header("location:./paginas/home.php");
    }

        require_once("./objetos/login.php");

    /*echo $_GET["primeiroParametro"];
    echo "<br>";
    echo $_GET["segundoParametro"];
    echo "<br>";
    echo $_REQUEST["primeiroParametro"];
    echo "<br>";
    echo $_REQUEST["segundoParametro"];*/

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Senac - login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <br>
        <br>
        <h1>Login</h1>

        <?php
            if(!empty($mensagem))
            echo " <div class='alert alert-danger' role='alert'>
            $mensagem
           </div> ";
         ?>


        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="E-mail">
            </div>
            <div class="form-group">
                <label for="senha">Senha</label>
                <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha">
            </div>

            <button type="submit" class="btn btn-primary">Entrar</button>
        </form>
    </div>
</body>
</html>

<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
