<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>formulário</title>
</head>
<body>
  <?php
  if (isset($_POST["enviar-form"])) {
    //array de erros
    $erros = [];
    
    /*        VALIDACOES
    
    if (!$idade = filter_input(INPUT_POST, "idade", FILTER_VALIDATE_INT)) {
      $erros[] = 'erro, idade precisa ser um numero inteiro';
    }
    if (!$email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL)) {
          $erros[] = 'erro, email invalido';
        }
    if (!$altura = filter_input(INPUT_POST, "altura", FILTER_VALIDATE_FLOAT)) {
           $erros[] = 'erro, formatacao invalida';
        }
    if (!$peso = filter_input(INPUT_POST, "peso", FILTER_VALIDATE_FLOAT)) {
          $erros[] = 'erro, insira um peso';
        }
    if (!$url = filter_input(INPUT_POST, "URL", FILTER_VALIDATE_URL)) {
          $erros[] = 'erro, URL invalida';
        }*/
        
        //        SANITIZE FILTROS   //
        
        //filtro que limpa caracteres invalidos
        $nome = filter_input(INPUT_POST,"nome", FILTER_SANITIZE_SPECIAL_CHARS);
        
        $idade = filter_input(INPUT_POST,"idade", FILTER_SANITIZE_NUMBER_INT);
        
        $email = filter_input(INPUT_POST,"email", FILTER_SANITIZE_EMAIL);
        
        //combinando as duas formas
        $url = filter_input(INPUT_POST,"URL", FILTER_SANITIZE_URL);
        if (!filter_var($url, FILTER_VALIDATE_URL)) {
          $erros[] = 'informe uma url valida';
        }
        
        
    //exibindo erros
    if (!empty($erros)) {
      foreach ($erros as $erro) {
        echo "<li> $erro </li>";
      }
      
    } else {
        echo "sucesso!, credenciais aceitas";
    }
  }
  ?>
 <section>
  <!--fazendo uma conexao ele é linkado pelo name, mas o id ter o mesmo nome que name, é uma boa pratica -->
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    nome: <input type="text"name="nome"><br>
    idade: <input type="text" name="idade"> <br>
    altura: <input type="number" name="altura"> <br>
    email: <input type="email" name="email"> <br>
    peso: <input type="text" name="peso"> <br>
    URL: <input type="text" name="url"> <br>
    <button type="submit" name="enviar-form"> enviar</button> <br/>
   </form>
   <!-- <a href="02-dados.php?idade=22"> enviar</a> 
   enviando pelo link metodo get -->
  </section>  
  </form>
</body>
</html>