<?php
require_once('vistas/plantilla/head.php');
?>
<div class="parent clearfix">
  <div class="bg-illustration">
    <img src="https://i.ibb.co/Pcg0Pk1/logo.png" alt="logo">

    <div class="burger-btn">
      <span></span>
      <span></span>
      <span></span>
    </div>

  </div>

  <div class="login">
    <div class="container">
      <h1>Accede a tu cuenta<br />Generamos confianza</h1>

      <div class="login-form">
        <form action="vistas/login/ValidacionUsuario.php" method="POST">
          <input type="text" name="usuario" placeholder="Usuario">
          <input type="password" name="pass" placeholder="Password">


          <div class="forget-pass">
            <a href="#">Olvidaste tu contraseña?</a>
          </div>

          <button type="submit">LOG-IN</button>


        </form>
      </div>

    </div>
  </div>
</div>