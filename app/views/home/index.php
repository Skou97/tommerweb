<?php //$model = new Home_Model(); ?>
<?php //$this->setSiteTitle('Home');  ?>
<?php $this->start('head');  ?>
<link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,,500,600,700" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
<link rel="stylesheet" href="css/animate.css">

<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="css/magnific-popup.css">

<link rel="stylesheet" href="css/aos.css">

<link rel="stylesheet" href="css/ionicons.min.css">

<link rel="stylesheet" href="css/bootstrap-datepicker.css">
<link rel="stylesheet" href="css/jquery.timepicker.css">


<link rel="stylesheet" href="css/flaticon.css">
<link rel="stylesheet" href="css/icomoon.css">
<link rel="stylesheet" href="css/style.css">
<!-- <link rel="stylesheet" href="<?=PROOT?>css/main.css"> -->
<script src="<?=PROOT?>js/main.js"></script>
<?php $this->end();  ?>

<?php $this->start('body');  ?>

    
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">MF Bolig</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="<?=PROOT?>home" class="nav-link">Hjem</a></li>
	          <li class="nav-item"><a href="<?=PROOT?>home/aboutus" class="nav-link">Om os</a></li>
	          <li class="nav-item"><a href="<?=PROOT?>home/blog" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="<?=PROOT?>home/Kontakt" class="nav-link">Kontakt</a></li>
	          <li class="nav-item cta"><a href="contact.html" class="nav-link"><span>Pris Beregner</span></a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

    <div class="hero-wrap js-fullheight">
      <div class="overlay"></div>
      <div class="container-fluid px-0">
      	<div class="row d-md-flex no-gutters slider-text align-items-center js-fullheight justify-content-end">
	      	<img class="one-third js-fullheight align-self-end order-md-last img-fluid" src="images/undraw_pair_programming_njlp.svg" alt="">
	        <div class="one-forth d-flex align-items-center ftco-animate js-fullheight">
	        	<div class="text mt-5">
	        		<span class="subheading">Har du brug for en</span>
	            <h1 class="mb-3"><span>Tømrer,</span> <span>Montør,</span> <span>Maskinefør</span></h1>
	            <p>Kontak os vi er altid klar på en ny opgave</p>
	            <p><a href="mailto:mail@markringtved.dk" class="btn btn-primary px-4 py-3">Skrive til os</a></p>
	          </div>
	        </div>
	    	</div>
      </div>
    </div>
    
    <section class="ftco-domain">
    	<div class="container">
    		<div class="row d-flex align-items-center">
    			<div class="col-lg-5 heading-white mb-4 mb-sm-4 mb-lg-0 ftco-animate">
    				<h2>Skal du have nyt tag?</h2>
    				<p>Søg efter din adresse og se hvad pris vi kan tilbyde dig.</p>
    			</div>
    			<div class="col-lg-7 p-5 ftco-wrap ftco-animate">
    				<form autocomplete="off" action="#" class="domain-form d-flex mb-3">
              <div class="form-group domain-name search-dawa-adr-box">
                <input type="text" class="form-control name px-4" placeholder="Skrive din adresse..." id="search-dawa-adr">
                <ul id="search-dawa-adr-list"></ul>
              </div>
              <div class="form-group domain-select d-flex">
	              <div class="select-wrap">
                  <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                  <select name="" id="" class="form-control">
                  	<option value="109">Betontegl i mellemgrå</option>
                    <option value="73">Betontegl i olivengrøn</option>
                    <option value="83">Betontegl i mellemgrå lys</option>
                    <option value="83">Betontegl i sort</option>
                  </select>
                </div>
                <input type="submit" class="search-domain btn btn-primary text-center" value="Search">
	            </div>
            </form>
            <p class="domain-price mt-2">
            	<span><small>Betontegl i mellemgrå</small> DKK 109/m2</span> 
            	<span><small>Betontegl i olivengrøn</small> DKK 73/m2</span> 
            	<span><small>Betontegl i mellemgrå lys</small> DKK 83/m2</span> 
            	<span><small>Betontegl i sort</small> DKK 83/m2</span>
            </p>
    			</div>
    		</div>
    	</div>
    </section>
  
    <footer class="footer-dis">
       <p>@ made by: Arne Skou Pedersen & Mark Ringtved Nielsen</p>
     </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
  <script src="<?=PROOT?>js/dawa/autocomplet.js"></script>
    

<?php $this->end();  ?>