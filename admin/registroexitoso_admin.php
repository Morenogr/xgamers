<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro Exitoso │ X-GAMERS</title>
  <link rel="stylesheet" href="../estilos/style_adminlogin.css">
  <link rel="stylesheet" href="../estilos/estilos_adminlogin.css">
  <link rel="icon" type="../image/png" href="../imagenes/icono.PNG">
</head>

<body>
  <?php
  session_start();
  ?>
  <canvas id="canvas"></canvas>
  <header id="header">
    <h1 data-text="¡Hola <?php echo $_SESSION["usuario_email_sesion"];?> Administrador!">¡Hola <?php echo $_SESSION["usuario_email_sesion"];?> Administrador!</h1>
    <p>Espero te encuentres bien el día de hoy, sigamos manejando nuestro imperio <br><a href="../dashboard.php" target="_self">Administremos juntos</a>.</p>
    <div class="lebels_fields" id="login_status"></div><br>
  </header>
  <!-- Footer -->
  <footer id="footer">
    <ul class="copyright">
      <li>Official by</li>
      <li>&copy; X-GAMERS.</li>
      <li>Creditos <a href="javascript:void(0);">X-GAMERS</a></li>
    </ul>
  </footer>
  <script src="../js/admin_login.js"></script>
</body>

</html>