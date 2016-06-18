<?php include 'Mail.php';?>

<!DOCTYPE html>
<html>
<head>
<link rel="icon" 
      type="image/png" 
      href="../images/favicon.png">
<title>Divya Enterprises-Furniture, Catrering & Other event equipments on hire, Chennai</title>
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="../js/jquery.min.js"></script>
<style>
.error {color: #FF0000;}
</style>
<style>
.success {color: #3A9625;}
</style>
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="google-site-verification" content="uANK6VKr7Pd3e1QfX0b6R2cgpoO7MaKw7Fnw4r55yjg" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Description" content="Divya Enterprises in Mandaveli, Chennai. Hire furniture and equipments for weddings, corporate events, meetings, cocktail and dinner parties. We provide tables and chairs, catering equipments, crockery and themed furniture. Contact a perfect Event planner @ 9840343065"/>
<meta name="keywords" content="Wedding Product For Hire, Divya Enterprises in Mandaveli, Event Hire, Equipments Hire, Tandoor Pot, Gas Range Single Burner, Kadai, Tiffany Chairs, Bentwood Chairs, Wedding Chairs, Tolix Chairs, Ghost Chairs, Navy Stools, Tait Bar Tables, Banquet Tables, Trestle Tables, Riedel Glassware, Plumm Glassware, Bogart Cutlery, Rustic Furniture, Industrial Furniture, French Furniture, Provincial Furniture, Coastal Furniture"/>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-78703614-1', 'auto');
  ga('send', 'pageview');

</script>
</head>
<body>
<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-MSC3CC"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MSC3CC');</script>
<!-- End Google Tag Manager -->
<!--header-->
<div class="header header-top">
	<div class="container">
		<div class="logo">
		<h1><a>
		Divya Enterprises
		</a></h1>
		</div>
		<div class="top-nav">
			<span class="menu"><img src="../images/menu.png" alt=""> </span>
				<ul>
					<li><a href="../index" class="hvr-sweep-to-bottom">Home</a></li>
					<li><a href="web/Our_Products" class="hvr-sweep-to-bottom">Our Products</a></li>
					<li><a href="web/About_us" class="hvr-sweep-to-bottom ">About Us</a></li>
					<li><a href="web/Gallery" class="hvr-sweep-to-bottom ">Gallery</a></li>
					<li class="active"><a href="web/Contact" class="hvr-sweep-to-bottom">Contact Us</a></li>
				</ul>
				<div class="clearfix"> </div>
						<!--script-->
					<script>
						$("span.menu").click(function(){
							$(".top-nav ul").slideToggle(500, function(){
							});
						});
				</script>				
		</div>
		<div class="clearfix"> </div>
	</div>
<!---->
</div>
<!--contact-->
<div class="jumbotron" style="margin: 0px;padding: 0px">
<div class="container">
				<div class="contact">
					<div class="contact-top">
						<h2 style="padding-bottom: 15px; text-align: center;font-size: 2.5em">CONTACT US</h2>
					</div>	
					<div class="map">
					
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.0975067521963!2d80.26167081435425!3d13.02946231713241!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5267ce6be1093d%3A0xd8f4b5799727d815!2sDivya+Enterprises!5e0!3m2!1sen!2sin!4v1461230008929" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
			 
			 </div>
			 <div class="contact-bottom" >

				 <form id="form" method="post" action="Contact.php">
				 
				<div>
							<input onclick="myFunction()" id="name" type="text" name="name" placeholder="Name" style="display: inline-block;" required>	
							<p class="error" style="display: inline-block;"> <?php echo $nameErr;?></p>
				</div>	
				
				<div>
					<input onclick="myFunction()" id="email" type="text" name="email" placeholder="Email Address" style="display: inline-block;" required>	
					<p class="error" style="display: inline-block;"> <?php echo $emailErr;?></p>
					
				</div>
					
				<div>	
				
					<input onclick="myFunction()" id="contact" type="text" name="contact" placeholder="Phone Number" style="display: inline-block;" required>
					<p class="error" style="display: inline-block;"> <?php echo $contactErr;?></p>
					
				</div>
				
				<div>
				
					<textarea id="message" name="message" placeholder="Message" style="display: inline-block;" maxlength="150"></textarea>				
					<!--
					<p class="error" style="display: inline-block;"> <?php echo $messageErr;?></p>
					-->
				</div>	
					
					<input onclick="myFunction()" class="submit" type="submit" name="submit" value="Submit">
					
					<b> <span class="success"> <?php echo $successMessage;?> </span> </b>
					
				
				</form>	
			</div>			
		</div>
			</div>
			</div>

<!--address-->

	<div class="address">
		<div class="container">
			<div class=" address-more">
				<h3>Address</h3>
				<div class="col-md-4 address-grid">
					<i class="glyphicon glyphicon-map-marker"></i>
					<div class="address1">
						<p>No 56, St Marys Road,</p><p>Mandaveli,</p>
						<p>Chennai-600 028</p>
					</div>
						<div class="clearfix"> </div>
				</div>
				<div class="col-md-3 address-grid ">
					<i class="glyphicon glyphicon-phone"></i>
						<div class="address1">
							<p>+91 9840343065</p>
							<p>+91 9840157755</p>
						</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-5 address-grid ">
					<i class="glyphicon glyphicon-envelope"></i>
						<div class="address1">
							<p><a href="mailto:@example.com">divyaenterprises.n@gmail.com</a></p>
						</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--//address-->
	
<!--footer-->
<div class="footer">
	<div class="container">
		<div class="col-md-4 footer-top">
			<h3><a href="#">Divya Enterprises</a></h3>
		</div>
		<div class="col-md-4 footer-top1">
			<ul class="social">
				<li><a href="#"><i> </i></a></li>
            	<li><a href="#"><i class="tweet"> </i></a></li>
            	<li><a href="#"><i class="in"> </i></a></li>
            	<li><a href="#"><i class="utube"> </i></a></li>
			</ul>
		</div>
		<div class="col-md-4 footer-top2">
			<p >© 2016 Divya Enterprises. All rights reserved | Developed by <a>COAX  & TEAM</a> </p>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
<script>
function myFunction() {
    document.getElementsByID("contact").click();
}
</script>
</body>
</html>