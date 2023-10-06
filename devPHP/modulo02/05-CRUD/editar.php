<?php
include_once 'php_action/db_connect.php';
//header, MANEIRA DE ENCONOMIZR E NAO FICAR USANDO ESQUELETO HTML REPETIDAMENTE
include_once 'includes/header.php';

if (isset($_GET["id"])){
      $id = mysqli_escape_string($connect, $_GET["id"]);
      
     $sql = "INSERT * FROM clientes WHERE id = '$id' ";
     $resultado = mysqli_query($connect, $sql);
     $dados = mysqli_fetch_array($resultado);
}
?>
<div class="row">
  <div class="col s12 m6 push m-3">
    <!-- definindo largura em celular e tablets o m-3 serve pra compensar espaco-->
    <h3 class="Light"> Editar cliente</h3>
    <form action="php_action/update.php" method="POST">
      <input type="hidden" name="id" value="<?php echo $dados['id'];?>">
      <div class="input field col s12">
        <input type="text" name="nome" id="nome" value="<?php echo $dados['nome'];?>">
        <label for="nome"> Nome </label> 
        </div>
        <div class="input field col s12">
        <input type="text" name="sobrenome" value="<?php echo $dados['sobrenome'];?> " id="sobrenome">
        <label for="sobrenome"> Sobrenome </label> 
        </div>
        <div class="input field col s12">
        <input type="email" name="email" value="<?php echo $dados['email'];?>"          id="email">
        <label for="email"> Email </label>
        </div>
        <div class="input field col s12">
        <input type="text" name="idade" value="<?php echo $dados['idade'];?>" id="idade">
        <label for="idade"> Idade </label> 
      </div>
      <button type="submit" name="btn-editar" class="btn"> Atualizar</button>
      <a href="indice.php" class="btn green"> Listar clientes</a>
    </form>
  </div>
</div>
<?php
//footer
include_once 'includes/footer.php';
?>