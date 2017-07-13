<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Perkiraan Haji</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Perkiraan Keberangakatan Haji, Perkiraan, Keberangakatan, Haji" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!--// css -->
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
<!-- //font -->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 

<script>
	function kirimNomor(){
		$.ajax({
			url:"haji.php",
			method:"POST",
			data:"haji="+$("#haji").val(),
			success:function(response){
				$("#hasil").html(response);
			}
		});
	}
</script>

<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->
</head>
<body>
	<!-- banner -->
	<div class="banner jarallax">
		<!-- agileinfo-dot -->
		<div class="agileinfo-dot">
			<div class="w3layouts-header-top">
				<div class="w3-header-top-grids">
					<div class="w3-header-top-left">
						<p><i class="fa" aria-hidden="true"></i>Anggota Kelompok:</p>
					</div>
					<div class="w3-header-top-right">
						<div class="w3-header-top-right-text">
							<p><i aria-hidden="true"></i> Alfian Suprandanu</p>
							<p><i aria-hidden="true"></i> Erik Marlendo</p>
							<p><i aria-hidden="true"></i> Tri Supanti</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			
			<div class="w3layouts-banner-slider">
				<div class="container">
					<div class="slider">
						<div class="callbacks_container">
							<ul class="rslides callbacks callbacks1" id="slider4">
								<li>
									<div class="agileits-banner-info">
										<h3>Keberangakatan Haji <span>cek perkiraan</span></h3>
									</div>
								</li>
							</ul>
						</div>
						<div class="clearfix"> </div>
						<script>
							// You can also use "$(window).load(function() {"
							$(function () {
							  // Slideshow 4
							  $("#slider4").responsiveSlides({
								auto: true,
								pager:true,
								nav:true,
								speed: 500,
								namespace: "callbacks",
								before: function () {
								  $('.events').append("<li>before event fired.</li>");
								},
								after: function () {
								  $('.events').append("<li>after event fired.</li>");
								}
							  });
						
							});
						 </script>
						<!--banner Slider starts Here-->
					</div>
				</div>
			</div>
		</div>
		<!-- //agileinfo-dot -->
	</div>
	<!-- //banner -->
	
	<div class="subscribe">
		<div class="container">
			<div class="about-heading agile-subscribe-heading">
				<h3>Masukkan Nomor Porsi</h3>
				<p>Untuk Mengecek Perkiraan Keberangkatan Haji</p>
			</div>
			<div class="subscribe-grid">
				<p>Contoh: 100137466</p>
				<form method="post">
					<input type="text" placeholder="Nomor Porsi" name="haji" id="haji" required="">
					<button type="button" class="btn1" onclick="kirimNomor();">CEK</button>
				</form>
				
				
			</div>
		</div>
	</div>
	
	<center>
		<div id="hasil"></div>
	</center>
	
	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="agileits-social-grids">
				<h4>We are social</h4>
				<div class="border"></div>
				<ul>
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#"><i class="fa fa-rss"></i></a></li>
					<li><a href="#"><i class="fa fa-vk"></i></a></li>
				</ul>
			</div>
			<div class="copyright">
				<p>© 2017 Pemrograman Platform. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
			</div>
		</div>
	</div>
	<!-- //footer -->

	<script src="js/jarallax.js"></script>
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>
	<script src="js/lightbox-plus-jquery.min.js"> </script>
	<script src="js/responsiveslides.min.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
</body>	
</html>