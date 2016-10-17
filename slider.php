<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Главная</title>

	<link rel="stylesheet" href="libs/bootstrap/bootstrap-grid-3.3.1.min.css" />
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="libs/fancybox/jquery.fancybox.css" />
	<link rel="stylesheet" href="libs/owl.carousel/assets/owl.carousel.css" />
	<link rel="stylesheet" href="libs/wow/animate.css">
	<link type="text/css" href="css/jquery.jscrollpane.css" rel="stylesheet" media="all" />

	<link rel="shortcut icon" href="favicon.ico" />
	<link rel="stylesheet" href="css/style.css">

</head>
<body>
	<script src="libs/jquery/jquery-1.11.1.min.js"></script>
	<script src="libs/owl.carousel/owl.carousel.js"></script>
	<script src="libs/fancybox/jquery.fancybox.pack.js"></script>
	<script src="libs/wow/wow.min.js"></script>
	<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
	<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>

	<script>
    	new WOW().init();
    </script>

	<script src="js/responsiveTabs.js"></script>
	<script src="js/jquery.maskedinput.min.js"></script>
	<script src="js/common.js"></script>

	<?php require_once('includes/header.php'); ?>
	
	<?php require_once('includes/footer.php'); ?>
<section class="ah-slider">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="ah-sbox1">
					
						<div class="item">
							<div class="ab-img-box">
							<img  src="img/ab-slide-1.jpg" alt="">
							</div>
							<div class="slidetextbox">
								<span class="slidetextbox-span1">
									Immobilienscouting für bisher am Markt<br> 
									unbekannte Potential immobilien ist das<br>  
									Spezialgebiet von Konstantin Wettig.
								</span>
							</div>
						</div>
					
					
						<div class="item">
							<div class="ab-img-box">
							<img  src="img/ab-slide-2.jpg" alt="">
							</div>
							<div class="slidetextbox slidetextbox-2">
								<span class="slidetextbox-span1 slidetextbox-span2">
									Personifizierte Immobilienprofessionalität<br> 
									verbunden mit einem umfassenden,<br> 
									persönlichen Netzwerk machen Konstantin<br> 
									Wettig zu einem ausgewiesenen Spezialisten<br>
									des deutschen Immobilienmarktes mit dem<br>
									Schwerpunkt auf München.<br>
								</span>
							</div>
						</div>
					
					<div class="item">
						<div class="ab-img-box">
							<img  src="img/ab-slide-3.jpg" alt="">
							</div>
							<div class="slidetextbox slidetextbox-2 slidetextbox-3">
								<span class="slidetextbox-span1 slidetextbox-span2">
									Das diskrete Vernetzen von Informations-<br>
									vorsprüngen im 
									Immobilienbereich stellt den<br> 
									Geschäftspartnern der KW Real
									Estate einen<br> besonderen Nutzen 
									in Aussicht.
								</span>
							</div>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</section>
<script>
 $('.ah-sbox1').owlCarousel({
    loop: true,
    margin:0,
    items: 1,
    autoplay: false,
    smartSpeed:2000,
    autoplayTimeout:7000,
    nav: true,
    navText:['<span class="ah-arrowleft"></span>','<span class="ah-arrowright"></span>']
});

</script>


</body>
</html>



