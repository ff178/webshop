<?php include MODULE."header.php"; ?>
<body>
  <?php include MODULE."nav.php"; ?>
    <body>
        <div class="head-bread">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="<?php print(URL); ?>">Inicio</a></li>
                    <li class="active">Productos</li>
                </ol>
            </div>
        </div>
        <div class="products-gallery">
           <div class="container">
               <div class="content-top3 col-md-9 grid-gallery">



                </div>
               <div class="col-md-3 grid-details">
                    <div class="grid-addon">
                        <section  class="sky-form">
					 <div class="product_right">
						  <!--script-->
						<script>
							$(document).ready(function(){
								$(".tab1 .single-bottom").hide();
								$(".tab2 .single-bottom").hide();
								$(".tab3 .single-bottom").hide();
								$(".tab4 .single-bottom").hide();
								$(".tab5 .single-bottom").hide();

								$(".tab1 ul").click(function(){
									$(".tab1 .single-bottom").slideToggle(300);
									$(".tab2 .single-bottom").hide();
									$(".tab3 .single-bottom").hide();
									$(".tab4 .single-bottom").hide();
									$(".tab5 .single-bottom").hide();
								})
								$(".tab2 ul").click(function(){
									$(".tab2 .single-bottom").slideToggle(300);
									$(".tab1 .single-bottom").hide();
									$(".tab3 .single-bottom").hide();
									$(".tab4 .single-bottom").hide();
									$(".tab5 .single-bottom").hide();
								})
								$(".tab3 ul").click(function(){
									$(".tab3 .single-bottom").slideToggle(300);
									$(".tab4 .single-bottom").hide();
									$(".tab5 .single-bottom").hide();
									$(".tab2 .single-bottom").hide();
									$(".tab1 .single-bottom").hide();
								})
								$(".tab4 ul").click(function(){
									$(".tab4 .single-bottom").slideToggle(300);
									$(".tab5 .single-bottom").hide();
									$(".tab3 .single-bottom").hide();
									$(".tab2 .single-bottom").hide();
									$(".tab1 .single-bottom").hide();
								})
								$(".tab5 ul").click(function(){
									$(".tab5 .single-bottom").slideToggle(300);
									$(".tab4 .single-bottom").hide();
									$(".tab3 .single-bottom").hide();
									$(".tab2 .single-bottom").hide();
									$(".tab1 .single-bottom").hide();
								})
							});
						</script>
						<!-- script -->
				 </section>

				   <!---->
					 <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">

                    </div>
               </div>
            <div class="clearfix"></div>
            </div>
        </div>
        <?php include MODULE."footer.php"; ?>
    </body>
</html>
<script>
$.ajax({
url:"<?php print(URL);?>Productos/allProducts",
type: "GET"
}).done(function(r){
  //console.log(r);
  r.map(function(n){
    $(".content-top3").append(
      '<div class="col-md-4 grid-stn simpleCart_shelfItem"><div class="ih-item square effect3 bottom_to_top"><div class="bottom-2-top"><div  class="img"><img style="height: 400px;" src="<?php print(URL);?>'+n.url+'" alt="/" class="img-responsive gri-wid"></div><div class="info"><div class="pull-left styl-hdn"><h3 style="font-size: 100%;" >'+n.nombre+'</h3><h2 style="font-size: 80%;" >'+n.ganchos+'</h2></div><div class="pull-right styl-price"><p><a  href="#" class="item_add"><span class="glyphicon glyphicon-shopping-cart grid-cart" aria-hidden="true"></span> <span class=" item_price">$'+n.precio+'</span></a></p></div><div class="clearfix"></div></div></div></div>  <div class="quick-view"><a href="<?php print(URL);?>Productos/single/'+n.idProductos+'">Quick view</a></div></div>');
      //console.log(n);
  });
});

</script>
