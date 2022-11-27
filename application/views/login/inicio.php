
<div class="parent clearfix">
  <div class="bg-illustration">
    <img src="https://i.ibb.co/Pcg0Pk1/logo.png" alt="logo">
  </div>

  <div class="login">
    <div class="container">
      <h1>Accede a tu cuenta<br />Generamos confianza</h1>

      <div class="login-form">
        <form action="" method="POST">
          <input type="text" name="usuario" id="usuario" placeholder="Usuario">
          <input type="password" name="pass" id="pass" placeholder="Password">

          <button type="submit" id='btnsesion'>LOG-IN</button>
        </form>
      </div>

    </div>
  </div>
</div>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script> -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>

<script>
    $("#btnsesion").click(function () {
      alert("Controlador");
    $.post(
        "/login/iniciosesion",
        {
          NomUsr: $("#usuario").val(),
          Contra: $("#pass").val(),
        },
        function (data, status) {
        alert("Data: " + data + "\nStatus: " + status);
        }
    );
});
</script>