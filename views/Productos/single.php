<?php include MODULE."header.php"; ?>
<body>
  <?php include MODULE."nav.php"; ?>
    <body>
        <div class="head-bread">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="<?php print(URL); ?>">Inicio</a></li>
                    <li class="active">Tienda</li>
                </ol>
            </div>
        </div>
        <div class="content-top5 showcase-grid">

        </div>
        </div>
        <?php include MODULE."footer.php"; ?>
    </body>

<?php
	$url = $_GET["url"];
	$url = explode("/", $url);
	$params = ( isset($url[2]) && $url[2] != null ) ? $url[2] : null;
?>

<script>
	$.ajax({
		url:"<?php print(URL);?>Productos/singleProduct/<?php echo $params; ?>",
		type: "GET"
		}).done(function(r){
			r.map(function(n){
				$(".content-top5").append(
					'<div class="container"><div class="col-md-8 showcase"><div class="flexslider"><ul class="slides"><li data-thumb="<?php print(URL);?>'+n.url+'"><div class="thumb-image"> <img src="<?php print(URL);?>'+n.url+'" data-imagezoom="true" class="img-responsive"> </div></li></ul><div class="clearfix"></div></div></div><div class="col-md-4 showcase"><div class="showcase-rt-top"><div class="pull-left shoe-name"><h3>'+n.nombre+'</h3><p>'+n.ganchos+'</p><p>'+n.colores+'</p><h4>'+n.precio+'</h4></div><div class="pull-left rating-stars"></div><div class="clearfix"></div></div><hr class="featurette-divider"><div class="shocase-rt-bot"><div class="float-qty-chart"><ul><li class="qty"></li></ul><div class="clearfix"></div></div><ul><li class="ad-2-crt simpleCart_shelfItem"></li></ul></div><div class="showcase-last"><h3>'+n.descripcion+'</h3></div></div>');
				console.log(n);

				});
		});

</script>
