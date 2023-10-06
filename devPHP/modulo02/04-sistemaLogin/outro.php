 <?php
   session_start();
   require_once 'db_connect.php';
   ?>
<html>
  <head>
    <title> restrito</title>
  </head>
  <body>
    <h1><?php echo $_SESSION['id_usuarios']; ?></h1>
  </body>
</html>