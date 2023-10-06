<?php
//sessao
session_start();
if (isset($_SESSION['mensagem'])) { ?>

<script>
  window.onload = function(){
  M.toast({html: '<?php echo($_SESSION['mensagem']);?>');
  };
</script>

<?php  
}
session_unset();


include_once 'php_action/db_connect.php';
//header, MANEIRA DE ENCONOMIZR E NAO FICAR USANDO ESQUELETO HTML REPETIDAMENTE
include_once 'includes/header.php';
?>

<div class="row">
  <div class="col s12 m6 push m-3">
    <!-- definindo largura em celular e tablets o m-3 serve pra compensar espaco-->
    <h3 class="Light"> Clientes</h3>
    <table class="Striped">
      <thead>
        <tr>
         <th> nome: </th>
         <th> sobrenome: </th>
         <th> email: </th>
         <th> idade: </th>
        </tr>
      </thead>
      <tbody>
         <?php
          $sql ="SELECT * FROM clientes";
          $resultado = mysqli_query($connect, $sql);
          while($dados = mysqli_fetch_array($resultado)){
          ?>
        <tr>
          <td> <?php echo $dados['nome']; ?> </td>
          <td> <?php echo $dados['sobrenome']; ?> </td>
          <td> <?php echo $dados['email']; ?> </td>
          <td> <?php echo $dados['idade']; ?> </td>
          <td> <a href="editar.php?=<?php echo $dados['id'];?>" class="btn-floating "<i class="material-icons"> editar</i> </a></td>
          
          <td><a href="#modal<?php echo $dados['id'];?>" class="btn-floating red modal-trigger" <i class="material-icons"> delete</i> </a> </td>
          <!-- Modal Structure -->
            <div id="modal<?php echo $dados['id'];?>" class="modal">
              <div class="modal-content">
                <h4>Atencao</h4>
                <p>Tem certeza que deseja excluir esse cliente? </p>
              </div>
              <div class="modal-footer">
                
                <form action="php_action/delete.php" method="POST">
                  <input type="hidden" id="id" value="<?php echo $dados['id'];?>">
                  <button type="submit" name="btn-deletar" class="btn red"> Sim, tenho certeza.</button>
                
                  <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cancelar</a>
                  
                </form>
                
              </div>
            </div>
        </tr>
        <?php } ?>
      </tbody>
    </table>
    <br>
    <a href="add.php" class="btn"> Adicionar clietes</a>
  </div>
</div>
<?php
//footer
include_once 'includes/footer.php';
?>