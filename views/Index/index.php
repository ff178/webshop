    <?php include MODULE."header.php"; ?>
    <body>
      <?php include MODULE."nav.php"; ?>
        <div class="header-end">
            <div class="container">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                  </ol>

                  <!-- Wrapper for slides -->
                  <div class="content-top10 carousel-inner" role="listbox">
                    <div class="item active">
                        <img style="height: 500px;" src="<?php print(URL); ?>public/images/9003atras.jpg" alt="...">
                        <div class="carousel-caption car-re-posn">
                            <h3>Figura Sana</h3>
                            <span class="color-bar"></span>
                        </div>
                    </div>
                  </div>

                  <!-- Controls -->
                  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left car-icn" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right car-icn" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>

        <div class="shop-grid">
            <div class="content-top11  container">
              
            </div>
        </div>
        <?php include MODULE."footer.php"; ?>
    </body>
</html>
<script>
$.ajax({
url:"<?php print(URL);?>Productos/productByCategory/5",
type: "GET"
}).done(function(r){
  //console.log(r);
  r.map(function(n){
    $(".content-top10").append(
      '<div class="item"><img style="height: 500px;" src="<?php print(URL); ?>'+n.url+'" alt="..."><div class="carousel-caption car-re-posn"><h3>'+n.nombre+'</h3><h4>'+n.ganchos+'</h4><span class="color-bar"></span></div></div>');
      //console.log(n);
  });
});

</script>
<script>
$.ajax({
url:"<?php print(URL);?>Productos/productByCategory/1",
type: "GET"
}).done(function(r){
  //console.log(r);
  r.map(function(n){
    $(".content-top11").append(
      '<div class="col-md-4 grid-stn simpleCart_shelfItem"><div class="ih-item square effect3 bottom_to_top"><div class="bottom-2-top"><div  class="img"><img style="height: 400px;" src="<?php print(URL);?>'+n.url+'" alt="/" class="img-responsive gri-wid"></div><div class="info"><div class="pull-left styl-hdn"><h3 style="font-size: 100%;" >'+n.nombre+'</h3><h2 style="font-size: 80%;" >'+n.ganchos+'</h2></div><div class="pull-right styl-price"><p><a  href="#" class="item_add"><span class="glyphicon glyphicon-shopping-cart grid-cart" aria-hidden="true"></span> <span class=" item_price">$'+n.precio+'</span></a></p></div><div class="clearfix"></div></div></div></div>  <div class="quick-view"><a href="<?php print(URL);?>Productos/single/'+n.idProductos+'">Quick view</a></div></div>');
      //console.log(n);
  });
});

</script>
