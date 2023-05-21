<?php

session_start();
if(isset($_SESSION['s_login'])){
    header("Location: listartikel.php");
}else{
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="login-page">
  <div class="form">
    <form class="login-form" action="login.php" method="POST">
      <input type="text" placeholder="username" class="form-control" id="floatingInput" name="user" /> 
      <input type="password" placeholder="password" class="form-control" id="floatingPassword"  name="pass" />
      <button type="submit">login</button>
    </form>
  </div>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js"></script>

</body>
</html>
<?php } ?>
