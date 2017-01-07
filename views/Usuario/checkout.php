<?php include MODULE."header.php"; ?>
<body>
  <?php include MODULE."nav.php"; ?>
        <div class="head-bread">
            <div class="container">
                <ol class="breadcrumb">
                    <li><a href="<?php print(URL); ?>">Inicio</a></li>
                    <li><a href="<?php print(URL); ?>Productos/products">Productos</a></li>
                    <li class="active">Carrito</li>
                </ol>
            </div>
        </div>
        <!-- check-out -->
            <div class="check">
                <div class="container">
                    <div class="col-md-3 cart-total">
                        <a class="continue" href="<?php print(URL); ?>Productos/products">Continuar Comprando</a>
                        <div class="price-details">
                            <h3>Detalles del Precio</h3>
                        </div>
                        <hr class="featurette-divider">
                        <ul class="total_price">
                           <li class="last_price"> <h4>TOTAL</h4></li>
                           <li class="last_price"><span class="simpleCart_total"></span></li>
                           <div class="clearfix"> </div>
                        </ul>
                        <div class="clearfix"></div>
                        <a class="order" href="#">Realizar Compra</a>
                    </div>
                    <div class="col-md-9 cart-items">
                        <h1>Mi Carrito de Compras (<span id="simpleCart_quantity" class="simpleCart_quantity"></span>)</h1>
                            <script>$(document).ready(function(c) {
                                $('.close1').on('click', function(c){
                                    $('.cart-header').fadeOut('slow', function(c){
                                        $('.cart-header').remove();
                                    });
                                    });
                                });
                           </script>
                        
                         <script>$(document).ready(function(c) {
                                $('.close2').on('click', function(c){
                                        $('.cart-header2').fadeOut('slow', function(c){
                                    $('.cart-header2').remove();
                                });
                                });
                                });
                         </script>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <?php include MODULE."footer.php"; ?>
    </body>
</html>
