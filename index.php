<?php
    header('X-Frame-Options: GOFORIT'); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Thai Tanic Restaurant</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://code.jquery.com/jquery-latest.js"></script>
	<script type="text/javascript" src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	<script type="text/javascript" src="js/js.js"></script>
	<link href="lightbox/dist/css/lightbox.css" rel="stylesheet">
	
</head>
<body>
	<div id="wrapper">
		<div id="navGroup">
			<div class="nav" id="home"><a href="#">HOME</a></div> <div class="clear"></div>
			<div class="nav" id="aboutus"><a href="#">ABOUT US</a></div> <div class="clear"></div>
			<div class="nav" id="menu"><a href="#">MENU</a></div> <div class="clear"></div>
			<div class="nav" id="contactus"><a href="#">CONTACT US</a></div> <div class="clear"></div>
			<div class="nav" id="gallery"><a href="#">GALLERY</a></div> <div class="clear"></div>
		</div>
	<div class="edgeDiv" id="leftDiv">
		<div id="leftContent1" class="content">
			<h2>ABOUT US</h2>
			<p>Lorem ipsum dolor sit amet, ea vis sumo magna tantas, tale eligendi vis no. Eos graeco aliquip id. Debet verterem vix ad, quo laudem sapientem hendrerit an, nonumes admodum periculis ad sit. Ad eam malis nulla, novum mediocrem petentium vis ex.</p>

			<p>Eu labores prodesset deseruisse cum, vel mollis pertinax an. Usu et partem saperet pertinax, eu nec denique oportere incorrupte. Sed ne indoctum eloquentiam, et pro magna abhorreant. At vis agam platonem, et prima homero theophrastus mel, ad eam tempor appareat. Usu in dico illum percipitur. Ea nam causae erroribus.</p>
		</div>
		<div id="leftContent2" class="content">
			<h2>MENU</h2>
			<iframe src="http://docs.google.com/gview?url=http://thaitanicrestaurant.com/menu.pdf" style="width:100%; height:100%;" frameborder="0"></iframe>
		</div>
		<div id="leftContent3" class="content">
			<h2>CONTACT US</h2>
			<p>Erroribus dignissim consequuntur ad eam. No has alterum petentium iudicabit, vel id soleat mandamus. Malorum assentior liberavisse per no, elit interpretaris cu has. Usu amet tota timeam eu. Has errem pertinax ut, mel et iudico dolore. Id modus putent eos.</p>

			<p>Quo ad quem veniam. Has doming aliquam id, eum dolores pertinacia referrentur at. An laudem phaedrum has, sed munere lobortis in. Modo nonumy nullam eu eos. Vim in inani pertinax, dolores iudicabit argumentum ius ex, dico quando argumentum mei te.	</p>
		</div>
		<div id="leftContent4" class="content">
			<h2>GALLERY</h2>
			<a  class="galleryImages" href="img/logo3.jpg" data-lightbox="example-1"><img class="example-image" src="img/logo3.jpg" alt="image-1" /></a>
			<a  class="galleryImages" href="img/logo2.jpg" data-lightbox="example-1"><img class="example-image" src="img/logo2.jpg" alt="image-1" /></a>
			<a  class="galleryImages" href="https://upload.wikimedia.org/wikipedia/commons/1/18/Lanna_cuisine_starters.JPG" data-lightbox="example-1"><img class="example-image" src="https://upload.wikimedia.org/wikipedia/commons/1/18/Lanna_cuisine_starters.JPG" alt="image-1" /></a>
		</div>
	</div>
	<div id="logo"> <img id="port" src="img/logo6.png" /> <img id="land" src="img/logo.jpg" /></div>
	<div id="logoBack"></div>

</div>
<script src="lightbox/dist/js/lightbox.js"></script>
<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-80728026-1', 'auto');
	ga('send', 'pageview');

</script>
</body>
</html>