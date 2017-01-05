<div class="footer-grid">
		<div class="container">
				<div class="col-md-2 re-ft-grd">
						<h3>Categories</h3>
						<ul class="categories content-top2">

						</ul>
				</div>
				<div class="col-md-2 re-ft-grd">
						<h3>Short links</h3>
						<ul class="shot-links">
								<li><a href="#">Contact us</a></li>
								<li><a href="#">Delivery</a></li>
								<li><a href="#">Return Policy</a></li>
								<li><a href="#">Terms & conditions</a></li>
								<li><a href="contact.html">Sitemap</a></li>
						</ul>
				</div>
				<div class="col-md-6 re-ft-grd">
						<h3>Social</h3>
						<ul class="social">
								<li><a href="#" class="fb">facebook</a></li>
								<li><a href="#" class="twt">twitter</a></li>
								<li><a href="#" class="gpls">g+ plus</a></li>
								<div class="clearfix"></div>
						</ul>
				</div>
				<div class="col-md-2 re-ft-grd">
						<div class="bt-logo">
								<div class="logo">
										<a href="index.html" class="ft-log">N-AIR</a>
								</div>
						</div>
				</div>
<div class="clearfix"></div>
		</div>
		<div class="copy-rt">
				<div class="container">
		<p>&copy;   2015 N-AIR All Rights Reserved. Design by <a href="http://www.w3layouts.com">w3layouts</a></p>
				</div>
		</div>
</div>
<script>
    $.ajax({
      url:"<?php print(URL);?>Productos/allCategorys",
      type: "GET"
      }).done(function(r){
        //console.log(r);
        r.map(function(n){
          $(".content-top2").append(
            '<li><a href="<?php print(URL);?>Productos/products">'+n.nombre+'</a></li>');
            //console.log(n);
        });
      });
  </script>
