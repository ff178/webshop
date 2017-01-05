<div class="header">
		<div class="container">
				<div class="header-top">
						<div class="logo">
									<a href="<?php print(URL); ?>">Figura Sana</a>
						</div>
						<div class="login-bars">

							<?php if(Session::get("usuario")){

							echo "Hola, ".Session::get("usuario");
							echo '<a id="logout" class="btn btn-default log-bar" role="button">Logout</a>';
								}else{ ?>
								<a class="btn btn-default log-bar" href="<?php print(URL); ?>Usuario/signUp" role="button">Sign up</a>
								<a class="btn btn-default log-bar" href="<?php print(URL); ?>Usuario/signIn" role="button">Login</a>
								<?php } ?>
								<div class="cart box_1">
										<a href="<?php print(URL); ?>Usuario/checkout">
										<h3>
												<div class="total">
 												<span class="simpleCart_total"></span>(<span id="simpleCart_quantity" class="simpleCart_quantity"></span>)</div></h3>
										</a>
										<p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
										<div class="clearfix"> </div>
								</div>
						</div>
<div class="clearfix"></div>
				</div>
				<!---menu-----bar--->
				<div class="header-botom">
						<div class="content white">
						<nav class="navbar navbar-default nav-menu" role="navigation">
								<div class="navbar-header">
										<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
												<span class="sr-only">Toggle navigation</span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
												<span class="icon-bar"></span>
										</button>
								</div>
								<div class="clearfix"></div>
								<!--/.navbar-header-->

								<div class="collapse navbar-collapse collapse-pdng" id="bs-example-navbar-collapse-1">
										<ul class="nav navbar-nav nav-font">
												<li class="dropdown">
														<a href="<?php print(URL);?>Productos/products/" class="dropdown-toggle" data-toggle="dropdown">Shop<b class="caret"></b></a>
														<ul class="dropdown-menu content-top1">


														</ul>
												</li>

												<li><a href="<?php print(URL); ?>Usuario/contacto">Contactanos</a></li>
												<div class="clearfix"></div>
										</ul>
										<div class="clearfix"></div>
								</div>
								<!--/.navbar-collapse-->
								<div class="clearfix"></div>
						</nav>
						<!--/.navbar-->
								<div class="clearfix"></div>
						</div>
						<!--/.content--->
				</div>
						<!--header-bottom-->
		</div>
</div>
<script>
$( "#logout" ).click(function() {
	$.ajax({
		url:"<?php print(URL);?>Usuario/salir",
		type: "GET"
		}).done(function(r){
			document.location.href = document.location.href;
		});
});
    $.ajax({
      url:"<?php print(URL);?>Productos/allCategorys",
      type: "GET"
      }).done(function(r){
        //console.log(r);
        r.map(function(n){
          $(".content-top1").append(
            '<li><a href="<?php print(URL);?>Productos/products/'+n.idCategorias+'">'+n.nombre+'</a></li>');
            //console.log(n);
        });
      });
  </script>
