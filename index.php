<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="estilos/login.css">    
    <link rel="stylesheet" href="pluggins/sweetalert/sweetalert2.min.css">
    <title>Inicio de Sesion</title>
</head>
<body>
 <div class="container">  
  <div class="wrapper fadeInDown">
    <div id="formContent">
      <!-- Tabs Titles -->

      <!-- Icon -->
      <div class="fadeIn first">
        <img src="Imagenes/icono-11-130x130_t.png" id="icon" alt="User Icon" />
      </div>

      <!-- Login Form -->
      <form id="formLogin" action="" method="POST">
        <input type="text" id="login" class="fadeIn second" name="login" placeholder="login"  >
        <input type="password" id="password" class="fadeIn third" name="login" placeholder="password"  >
        <input type="submit" class="fadeIn fourth" value="Log In">
      </form>

      <!-- Remind Passowrd
      <div id="formFooter">
        <a class="underlineHover" href="#">Forgot Password?</a>
      </div> -->

    </div>
  </div>
</div> 


<!-- Referenciamos los js-->
<script src="js/jquery-3.6.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="pluggins/sweetalert/sweetalert2.all.min.js"></script>
<script src="js/login.js"></script>



</body>
</html>