<?php
    $mensagem = "";

    $host = "127.0.0.1";
    $usuario = "root";
    $senhaBd = "Redmil123";
    $banco_de_dados = "loja_virtual";

    $conexao = mysqli_connect($host, $usuario, $senhaBd, $banco_de_dados);

    if (!$conexao) {
        die("Não foi possível!");
    }


    // recupera valores enviados via post
    //$_POST
    // recupera valores enviados via get (url)
    //$_GET
    // recupera ambos
    //$_REQUEST

    //echo $_POST["email"]."<br>";
    //echo $_POST["senha"]."<br>";
    //echo $_REQUEST["email"]."<br>";
    //echo $_REQUEST["senha"]."<br>";

    //echo $_GET["email"]."<br>";
    //echo $_GET["senha"]."<br>";

    if (isset($_POST["email"]) && isset($_POST["senha"])) {

      $email = $_POST["email"];
      $senha = $_POST["senha"];

      $senhaCriptografada = md5($senha);
      //echo $senhaCriptografada;

      $sql = "SELECT id FROM tb_usuario WHERE email = '$email' AND senha = '$senhaCriptografada'";
      $resultado = mysqli_query($conexao, $sql);

      if (mysqli_num_rows($resultado) > 0) {
          session_start();
          $_SESSION["user"] = 10;
          header("location:./paginas/home.php");
      }
      else{
        $mensagem = "Login ou senha invalido!";
      }
  }
?>
