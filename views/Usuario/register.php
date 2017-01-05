<?php include MODULE."header.php"; ?>
<body>
  <?php include MODULE."nav.php"; ?>
        <div class="head-bread">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="<?php print(URL); ?>">Home</a></li>
                    <li><a href="register.html">LOGIN</a></li>
                    <li class="active">REGISTER</li>
                </ol>
            </div>
        </div>
        <!-- reg-form -->
	<div class="reg-form">
		<div class="container">
			<div class="reg">
				<h3>Register Now</h3>
				<p>Welcome, please enter the following details to continue.</p>
				<p>If you have previously registered with us, <a href="#">click here</a></p>
				 <form class="regisCon" method="POST">
					<ul>
						<li class="text-info">Username: </li>
						<li><input name="usuario" type="text" value="" required=" "></li>
					</ul>
					<ul>
						<li class="text-info">Email: </li>
						<li><input name="email" type="text" value="" required=" "></li>
					</ul>
					<ul>
						<li class="text-info">Password: </li>
						<li><input name="pass" type="password" value="" required=" "></li>
					</ul>
					<input id="regis" name="" type="submit" value="Register Now">
					<p class="click">By clicking this button, you are agree to my  <a href="#">Policy Terms and Conditions.</a></p>
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
