<section id="accueil">
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> parent of 1ff9643... Important commit before important changements
	<div class="col-lg-offset-1 col-lg-7 col-md-offset-0 col-md-6 col-sm-offset-0 col-sm-12 col-xs-offset-0 col-xs-12 titles-container">
		<h1>Taxi Estavayer</h1>
		<h2>Taxi 24h/24 7/7</h2>
		<h3>Commander un taxi à Estavayer-le-Lac et environs<br />rapidement et simplement</h3>
	</div>
	<div id="main-box" class="col-lg-offset-0 col-lg-3 col-md-offset-0 col-md-5 col-sm-offset-2 col-sm-8  col-xs-offset-1 col-xs-10">
		<div class="box box-title">
			<div class="img-box-container"><img src="css/img/taxi.png" alt="Taxi" class="img-box" /></div><h3 class="inline">Taxi à Estavayer-le-Lac</h3>
		</div>
		<div class="box box-number">
    		<div class="img-box-container"><img src="css/img/phone.png" alt="Phone" class="img-box" /></div><p class="inline vertical-middle">079 846 29 84</p>
		</div>
		<div class="box box-content">
    		<div class="img-box-container"><img src="css/img/24_hour.png" alt="24/24" class="img-box" /></div><p class="inline vertical-middle">24h/24</p>
		</div>
		<div class="box box-content">
    		<div class="img-box-container"><img src="css/img/localize.png" alt="Localize" class="img-box" /></div><p class="inline vertical-middle">Nous trouver</p>
<<<<<<< HEAD
		</div>
=======
	<div id="accueil-overlay">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 titles-container">
			<?php 

			if(array_key_exists("HTTP_REFERER", $_SERVER)){
				if(strpos($_SERVER['HTTP_REFERER'], "taxiestavayer") !== FALSE){
					echo '<h1>Taxi Estavayer</h1>';
					echo '<h3>Commander un taxi à Estavayer-le-Lac et aux alentours<br />rapidement et simplement</h3>';
					echo '<h4>TaxiDoudou</h4>';
				}
				else{
					echo '<h1>Taxi Doudou</h1>';
					echo '<h3>Commander un taxi en Suisse romande<br />rapidement et simplement</h3>';
				}
			}
			else{
				echo '<h1>Taxi Doudou</h1>';
				echo '<h3>Commander un taxi en Suisse romande<br />rapidement et simplement</h3>';
			}
			?>
			
		</div>
		<!--<div id="main-box" class="col-lg-offset-0 col-lg-3 col-md-offset-0 col-md-5 col-sm-offset-2 col-sm-8  col-xs-offset-1 col-xs-10">
			<div class="box box-title">
				<div class="img-box-container"><img src="css/img/taxi.png" alt="Taxi" class="img-box" /></div><h3 class="inline">Taxi à Estavayer-le-Lac</h3>
			</div>
			<div class="box box-number">
	    		<div class="img-box-container"><img src="css/img/phone.png" alt="Phone" class="img-box" /></div><p class="inline vertical-middle">079 846 29 84</p>
			</div>
			<div class="box box-content">
	    		<div class="img-box-container"><img src="css/img/24_hour.png" alt="24/24" class="img-box" /></div><p class="inline vertical-middle">24h/24</p>
			</div>
			<div class="box box-content">
	    		<div class="img-box-container"><img src="css/img/localize.png" alt="Localize" class="img-box" /></div><p class="inline vertical-middle">Nous trouver</p>
			</div>
		</div>-->
>>>>>>> parent of 2271271... Last ones
=======
		</div>
>>>>>>> parent of 1ff9643... Important commit before important changements
	</div>
</section>
