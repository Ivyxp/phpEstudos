  <?php
   require_once 'db_connect.php';
   session_start();
   ?>
<html>
  <head>
    <title> login</title>
  </head>
  <body>
    <?php
    if (isset($_POST["btn-entrar"])) {
      $erros[] = '';
      $login = mysqli_escape_string($connect, $_POST["login"]);
      $senha = mysqli_escape_string($connect, $_POST["senha"]);
      //verificar se algum campo esta vazio
      if (empty($login) or empty($senha)) {
        $erros[] = "<li> O campo login/senha deve ser preenchido </li>";
      } else {
        $sql = "SELECT login FROM usuarios WHERE login = '$login' ";
        $resultado = mysqli_query($connect, $sql);
        
        if (mysqli_num_rows($resultado)>0) {
          $senha = md5($senha);
          $sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";
          $resultado = mysqli_query($connect, $sql);
          if (mysqli_num_rows($resultado) == 1) {
            $dados = mysqli_fetch_array($resultado);
            mysqli_close($connect);
            $_SESSION['logado'] = true;
            $_SESSION["id_usuarios"] = $dados['id'];
            header("Location: outro.php");
          } else {
            $erros[] = "<li> credencias incorretas </li>";
          }
        }else {
          $erros[] = "<li> usuario inexistente </li>";
        }
      }
    }
    ?>
    
    <h1> login</h1>
    
    <?php
    if (!empty($erros)) {
      foreach ($erros as $erro){
        echo $erro;
      }
    }
    ?>
    <hr>
    <form action="" method="POST">
      login: <input type="text" name="login"><br>
      senha: <input type="password" name="senha"><br>
      <button type="submit" name="btn-entrar"> Entrar </button>
    </form>
  </body>
</html>

