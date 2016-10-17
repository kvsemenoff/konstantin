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
    smartSpeed:500,
    autoplayTimeout:7000,
    nav: true,
    navText:['<span class="ah-arrowleft"></span>','<span class="ah-arrowright"></span>']
});
var owl = $(".ah-sbox1");
	owl.on( 'translated.owl.carousel initialized.owl.carousel', function(e) {
		// alert(e.item.index);
        if(e.item.index >= 3){
        	$('.owl-dot').addClass('white-dot');
        	$('.ah-arrowleft').addClass('white-left');
        	$('.ah-arrowright').addClass('white-right');
        }
    	else if(e.item.index == 2){
    		$('.owl-dot').removeClass('white-dot');
    		$('.ah-arrowleft').removeClass('white-left');
        	$('.ah-arrowright').removeClass('white-right');
    	}
    });
</script>




