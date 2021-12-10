<?php
require_once './config.php';
?>
<style>
	.footer-col h4::before {
		background-color: <?php echo SITE_COLOR; ?>;
	}
</style>
<footer class="footer">
<div class="container-footer">
    <div class="row">
        <div class="footer-col">
        <h4>Bedrijf</h4>
  	 			<ul>
  	 				<li><a href="#">over ons</a></li>
  	 				<li><a href="#">onze services</a></li>
  	 				<li><a href="#">privacy policy</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>Krijg hulp</h4>
  	 			<ul>
  	 				<li><a href="#">FAQ</a></li>
  	 				<li><a href="#">kaartjes</a></li>
  	 				<li><a href="#">refunds</a></li>
  	 				<li><a href="#">email</a></li>
  	 				<li><a href="#">betalings opties</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>shop</h4>
  	 			<ul>
  	 				<li><a href="#">Kaartjes</a></li>
  	 				<li><a href="#">eten</a></li>
  	 				<li><a href="#">drinken</a></li>
  	 			</ul>
  	 		</div>
  	 		<div class="footer-col">
  	 			<h4>volg ons</h4>
  	 			<div class="social-links">
  	 				<a href="#"><i class="fab fa-facebook-f"></i></a>
  	 				<a href="#"><i class="fab fa-twitter"></i></a>
  	 				<a href="#"><i class="fab fa-instagram"></i></a>
  	 				<a href="#"><i class="fab fa-linkedin-in"></i></a>
  	 			</div>
  	 		</div>
  	 	</div>
  	 </div>
  </footer>
  
<script>
    <?php include_once "./src/js/navbar.js"; ?>
    <?php include_once "./src/js/swiper.js"; ?>
</script>