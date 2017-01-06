<?php include MODULE."header.php"; ?>
<body>
  <?php include MODULE."nav.php"; ?>
        <div class="head-bread">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="<?php print(URL); ?>">Inicio</a></li>
                    <li class="active">Entrar</li>
                </ol>
            </div>
        </div>
        <!--signup-->
        <!-- login-page -->
        <div class="login">
            <div class="container">
                <div class="login-grids">
                    <div class="col-md-6 log">
                             <h3>Login</h3>
                             <div class="strip"></div>
                             <p>Bienvenido, ingrese los siguientes detalles para continuar.</p>
                             <form class="loginCon" method="POST">
                                 <h5>Email:</h5>
                                 <input name="email" type="text" value="">
                                 <h5>Contrasena:</h5>
                                 <input name="pass" type="password" value=""><br>
                                 <input id="login" type="submit" value="Entrar">

                             </form>
                    </div>
                    <div class="col-md-6 login-right">
                            <h3>Nuevo Registro</h3>
                            <div class="strip"></div>
                            <p>Al crear una cuenta en nuestra tienda, podra desplazarse mas rapidamente por el proceso de pago.</p>
                            <a href="register.html" class="button">Crear Cuenta</a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
          <?php include MODULE."footer.php"; ?>
    </body>
</html>
<script>
$(".loginCon").submit(function(e){
  e.preventDefault();

  var form = $(this)[0];
  var data = {}



  var email = form.querySelector("[name=email]").value;
  var pass = form.querySelector("[name=pass]").value;

  var data = processForm(form);
    console.log(data);
    $.ajax({
          url:"<?php print(URL);?>Usuario/singIn",
          method:"POST",
          data: data
        }).done(function(r){
          console.log(r);

        });


  return false;

});



function processForm(form){
  var inputs = form.querySelectorAll("input");
  var data = {};
  $(inputs).each(function(){
    var input = $(this);
    if(input.context.type != "submit"){
      var attr = input.context.name;
      data[attr] = input.context.value;
    }
  });
  return data;
}

$( "#login" ).click(function() {
  document.location.href = document.location.href;
});

</script>
