<html>
  <head>
    <title> upando arquivo</title>
  </head>
  <body>
    <?php
      //verifics se o botao foi clicado
    if (isset($_POST['enviar-form'])) {
      //formatos de extensao
      $formatosPermitidos = ["png", "jpg", "jpeg", "gif"];
      
      //laco de repeticao para fazer upload de multiplos arquivos
      $totalArquivos = count($_FILES['arquivo']['name']);
      $contador = 0;
      while($contador < $totalArquivos){
      
      //verifica e recebe a extesao do arquivo
      //em uploads multiplos e necessario informa o incice, add a variavel contador
      $extensao = pathinfo($_FILES['arquivo']['name'][$contador], PATHINFO_EXTENSION);
      
      //verifica o formato se for compativel faz upload
      if (in_array($extensao, $formatosPermitidos)) {
        $pasta = 'arquivos/';
        //tambem e necessario o contador quando for arquivos multiplos
        $temporario = $_FILES['arquivo']['tmp_name'][$contador];
        $novoNome = uniqid().".$extensao";
        
        //verificando com funcao que faz de fato o upload
        if (move_uploaded_file($temporario, $pasta.$novoNome)) {
          //$mensagem = 'upload feito com sucesso';
          echo "upload feito com sucesso para a pasta: $pasta";
        }else {
          //$mensagem = 'erro, nao foi possivel fazer o upload';
          echo "erro, nao foi possivel fazer upload do arquivo $temporario";
        }
        
      } else {
        //$mensagem = "formato invalido";
        echo "$extensao extensao invalida";
      }
      $contador++;
    }
      //echo $mensagem;
    }
    ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data"> <!--enctype e necessario pra fazer upload -->
    
      <!-- quando for mais de um arquivo e necessario informar como array e o metodo multiplo-->
      <input type="file" name="arquivo[]" multiple>
      <input type="submit" name="enviar-form">
      
      
    </form>
  </body>
</html>