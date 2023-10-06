<?php
//header, MANEIRA DE ENCONOMIZR E NAO FICAR USANDO ESQUELETO HTML REPETIDAMENTE
include_once 'includes/header.php';
?>
<div class="row">
  <div class="col s12 m6 push m-3">
    <!-- definindo largura em celular e tablets o m-3 serve pra compensar espaco-->
    <h3 class="Light"> Novo cliente</h3>
    <form action="php_action/create.php" method="POST">
      <div class="input field col s12">
        <input type="text" name="nome" id="nome">
        <label for="nome"> Nome </label> 
        </div>
        <div class="input field col s12">
        <input type="text" name="sobrenome" id="sobrenome">
        <label for="sobrenome"> Sobrenome </label> 
        </div>
        <div class="input field col s12">
        <input type="email" name="email" id="email">
        <label for="email"> Email </label>
        </div>
        <div class="input field col s12">
        <input type="text" name="idade" id="idade">
        <label for="idade"> Idade </label> 
      </div>
      <button type="submit" name="btn-cadastrar" class="btn"> Cadastrar</button>
      <a href="indice.php" class="btn green"> Listar clientes</a>
    </form>
  </div>
</div>
<?php
//footer
include_once 'includes/footer.php';
?>