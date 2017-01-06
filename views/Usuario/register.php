<?php include MODULE."header.php"; ?>
<body>
  <?php include MODULE."nav.php"; ?>
        <div class="head-bread">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="<?php print(URL); ?>">Inicio</a></li>
                    <li><a href="<?php print(URL); ?>Usuario/signIn">Entrar</a></li>
                    <li class="active">Registro</li>
                </ol>
            </div>
        </div>
        <!-- reg-form -->
	<div class="reg-form">
		<div class="container">
			<div class="reg">
				<h3>Registrate</h3>
				<p>Bienvenido, ingrese los siguientes detalles para continuar.</p>
				<p>Si ya te has registrado antes,<a href="<?php print(URL); ?>Usuario/signIn">click aqui</a></p>
				 <form class="regisCon" method="POST">
					<ul>
						<li class="text-info">Nombre de usuario: </li>
						<li><input name="usuario" type="text" value="" required=" "></li>
					</ul>
					<ul>
						<li class="text-info">Email: </li>
						<li><input name="email" type="email" value="" required=" "></li>
					</ul>
					<ul>
						<li class="text-info">contrasena: </li>
						<li><input name="pass" type="password" value="" required=" "></li>
					</ul>
					<input id="regis" name="" type="submit" value="Registrate Ahora">
				</form>
			</div>
		</div>
	</div>
        <?php include MODULE."footer.php"; ?>
    </body>
</html>
<script>
$(".regisCon").submit(function(e){
  e.preventDefault();

  var form = $(this)[0];
  var data = {}


  var username = form.querySelector("[name=usuario]".value);
  var email = form.querySelector("[name=email]").value;
  var pass = form.querySelector("[name=pass]").value;

  var data = processForm(form);
    console.log(data);
    $.ajax({
          url:"<?php print(URL);?>Usuario/singUp",
          method:"POST",
          data: data
        }).done(function(r){
          console.log(r);
            if(r.error == 0){
              alert("Te haz registrado, gratz!");
              location.reload();
            }else{
              alert("Paila!");
            }


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

$( "#regis" ).click(function() {
  document.location.href = document.location.href;
});
</script>
