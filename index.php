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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <style>

    body{
      background-color: #232323;

      color: #f5f5f5;
    }

        *.container {
          position: absolute;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);
        }

        h1{
          text-align: center;
          position: relative;
          font-weight: lighter;
          top: -1rem;
          font-size: 2rem;
        }

        img.logo{
          height: 20vh;
          margin-left: 46%;
          margin-right: auto;
          margin-bottom: 2rem;
        }

        div.wrappercontainer{
          height: 100vh;
          background-image: linear-gradient(to right, #0e000d 20%, #1e0021 50%, #0e000d 100%) !important;
        }

        </style>

    </head>
    <body>
      <div class="wrappercontainer">

        <div class="container" style="width: 430px;">
          <img class="logo" src="g2000.png" alt="">
            <br>
            <br>
            <h1>Efetuar o login</h1>

            <?php
                if(!empty($mensagem))
                echo " <div class='alert alert-danger' role='alert'>
                $mensagem
               </div> ";
             ?>

        <!-- <div class="centerForm"> -->
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
          <div class="form-group">
              <label for="email">E-mail</label>
              <input style="width: 400px;" type="email" class="form-control" id="email" name="email" placeholder="E-mail">
          </div>
          <div class="form-group">
              <label for="senha">Senha</label>
              <input style="width: 400px;" type="password" class="form-control" id="senha" name="senha" placeholder="Senha">
          </div>

          <button style="width: 100%;background-image: linear-gradient(to right, #b8cbb8 0%, #b8cbb8 0%, #b465da 0%, #cf6cc9 33%, #ee609c 66%, #ee609c 100%); outline:none; border-color: #434343;" type="submit" class="btn btn-primary">Entrar<i style="padding-left:.5rem;" class="fas fa-sign-out-alt"></i></button>
        </form>
        <!-- </div> -->

        </div>

      </div>

    </body>
    </html>

    <script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
